<?php

namespace App\Http\Controllers;

use App\Models\Assignments;
use App\Models\Course;
use Illuminate\Http\Request;

class AssignmentsController extends Controller
{
    public function index($id)
    {
        $course = Course::with('lecturer')->find($id);

        if (!$course) {
            return back()->with('error', 'Course not found');
        }
        $assignments = Assignments::where('course_id', $id)->get();

        return view('pages.classes.assignments.index', compact('course', 'assignments'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'deadline' => 'required',
                'course_id' => 'required',
            ]);

            $assignment = new Assignments();
            $assignment->title = $request->title;
            $assignment->description = $request->description;
            $assignment->deadline = $request->deadline;
            $assignment->course_id = $request->course_id;
            $assignment->save();

            return back()->with('success', 'Assignment created successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Failed to create assignment');
        }
    }
}
