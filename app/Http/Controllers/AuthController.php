<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AuthController extends Controller
{
    /**
     * Login User
     */
    public function authenticate(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);


            if (!Auth::attempt($credentials)) {
            return back()->with('error', 'Invalid credentials');
            }
            $request->session()->regenerate();

            $user = Auth::user();

            try {
                $token = $user->createToken('auth_token')->plainTextToken;
            } catch (\Exception $e) {
               return back()->with('error', 'Token creation failed');
            }

            session([
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'role' => $user->roles->pluck('name')->first() ?? 'Mahasiswa',
                    'token' => $token
                ]
            ]);


            return redirect()->route('dashboard.index');
        } catch (\Throwable $th) {
           return back()->with('error', 'Invalid credentials');
        }
    }

    /**
     * Register User
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }



        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $role = Role::firstOrCreate(['name' => $request->role]);

        if ($role) {
            $user->assignRole($role->name);
        }

        try {
            $token = $user->createToken('auth_token')->plainTextToken;
        } catch (\Exception $e) {
            return response()->json(['error' => 'Token creation failed'], 500);
        }

        session([
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->roles->pluck('name')->first(),
                'token' => $token
            ]
        ]);

        return redirect()->route('login');
    }

    /**
     * Logout User
     */
    public function logout(Request $request)
    {

        $user = auth()->user();

        if (!$user) {
            return response()->json(['message' => 'User not authenticated'], 401);
        }

        $user->tokens()->delete();


        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');

        return response()->json(['message' => 'Logout successful'], 200);
    }
}
