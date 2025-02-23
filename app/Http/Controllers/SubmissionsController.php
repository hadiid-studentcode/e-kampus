<?php

namespace App\Http\Controllers;

use App\Models\Submissions;
use Illuminate\Http\Request;

class SubmissionsController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'assignment_id' => 'required',
                'student_id' => 'required',
                'file' => 'required',
            ]);
            $submission = new Submissions();
            $submission->assignment_id = $request->assignment_id;
            $submission->student_id = $request->student_id;
            $submission->file_path = $request->file('file')->store('submissions', 'public');
            $submission->save();
            return back()->with('success', 'Submission uploaded successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Error uploading submission');
        }
    }

    public function show($id)
    {
        $submissions = Submissions::with('student', 'assignment')->where('assignment_id', $id)->get();
        return view('pages.classes.assignments.show', compact('submissions'));
    }

    public function grade(Request $request, $id)
    {
        try {
            $request->validate([
                'score' => 'required',
            ]);
            $submission = Submissions::find($id);
            $submission->score = $request->score;
            $submission->save();
            return back()->with('success', 'Submission graded successfully');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return back()->with('error', 'Error grading submission');
        }
    }
}
