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
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $user = Auth::user();

        try {
            $token = $user->createToken('auth_token')->plainTextToken;
        } catch (\Exception $e) {
            return response()->json(['error' => 'Token creation failed'], 500);
        }

        return response()->json([
            'message' => 'Login successful',
            'token' => $token,
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->roles->pluck('name')->first() ?? 'Mahasiswa'
            ]
        ], 200);
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

        return response()->json([
            'message' => 'Registrasi berhasil',
            'token' => $token,
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->roles->pluck('name')->first(),
            ]
        ], 201);
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

        if ($user->currentAccessToken()) {
            $user->currentAccessToken()->delete();
        }

        return response()->json(['message' => 'Logout successful'], 200);
    }
}
