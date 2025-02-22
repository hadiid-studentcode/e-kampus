<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('lecturer')->get();

        return view('pages.courses.index', compact('courses'));
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'mk' => 'required|string',
                'description' => 'nullable|string',
            ]);

            Course::create([
                'name' => $request->mk,
                'description' => $request->description,
                'lecturer_id' => Auth::id(),
            ]);

            return back()->with('success', 'Berhasil menambahkan course');
        } catch (\Throwable $th) {
            return back()->with('error', 'Gagal menambahkan course');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'mk' => 'required|string',
                'description' => 'nullable|string',
            ]);

            Course::find($id)->update([
                'name' => $request->mk,
                'description' => $request->description,
            ]);

            return back()->with('success', 'Berhasil mengubah course');
        } catch (\Throwable $th) {
            return back()->with('error', 'Gagal mengubah course');
        }
    }
    public function destroy($id)
    {
        try {
            Course::find($id)->delete();
            return back()->with('success', 'Berhasil menghapus course');
        } catch (\Throwable $th) {
            return back()->with('error', 'Gagal menghapus course');
        }
    }
    public function enroll($id){
        try {
            $course = Course::findOrFail($id);
            $user = Auth::user();

            if ($user->enrolledCourses()->where('course_id', $id)->exists()) {
                return redirect()->route('courses.index')->with('error', 'Anda sudah terdaftar di mata kuliah ini!');
            }

            $user->enrolledCourses()->attach($id);

            return redirect()->route('courses.index')->with('success', 'Berhasil mendaftar mata kuliah!');
        } catch (\Throwable $th) {
          
        }
    }
}
