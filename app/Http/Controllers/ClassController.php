<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\materials;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $query = Course::with('lecturer');

        if ($user->hasRole('Dosen')) {
            $query->where('lecturer_id', $user->id);
        } elseif ($user->hasRole('Mahasiswa')) {
            $query->whereHas('students', fn($q) => $q->where('user_id', $user->id));
        }

        $courses = $query->get();

        return view('pages.classes.index', compact('courses'));
    }

    public function show($id)
    {
        $course = Course::with('lecturer')->find($id);
        $materials = materials::where('course_id', $id)->get();
        return view('pages.classes.show', compact('course', 'materials'));
    }
}
