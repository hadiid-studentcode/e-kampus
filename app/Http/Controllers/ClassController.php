<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\materials;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {

        $courses = Course::with('lecturer')->get();

        return view('pages.classes.index', compact('courses'));
    }
    public function show($id)
    {
        $course = Course::with('lecturer')->find($id);
        $materials = materials::where('course_id', $id)->get();
        return view('pages.classes.show', compact('course', 'materials'));
    }
}
