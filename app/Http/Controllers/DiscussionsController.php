<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Discussions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscussionsController extends Controller
{
    public function show($id)
    {
        $course_id = $id;
        $discussion = Discussions::with('replies')->where('course_id', $course_id)->get();

        $course = Course::with('lecturer')->find($id);


        return view('pages.classes.discussions.show', compact('discussion', 'course'));
    }

    public function store(Request $request){
        try {
            Discussions::create([
                'course_id' => $request->course_id,
                'user_id' => Auth::id(),
                'content' => $request->content
            ]);

          return response()->json(['success' => true]);

        } catch (\Throwable $th) {
         return response()->json(['success' => false]);
        }
    }
}
