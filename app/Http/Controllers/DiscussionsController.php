<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Discussions;
use Illuminate\Http\Request;

class DiscussionsController extends Controller
{
    public function show($id)
    {
        $course_id = $id;
        $discussion = Discussions::with('replies')->where('course_id', $course_id)->get();

        $course = Course::with('lecturer')->find($id);


        return view('pages.classes.discussions.show', compact('discussion', 'course'));
    }
}
