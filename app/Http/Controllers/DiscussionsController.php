<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Discussions;
use App\Models\Replies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscussionsController extends Controller
{
    public function show($id)
    {
        $course_id = $id;


        $course = Course::with('lecturer')->find($id);
        $course_id = $course->id;

        $token = Auth::user()->createToken('auth_token')->plainTextToken;
        return view('pages.classes.discussions.show', compact('course', 'token', 'course_id'));
    }

    public function getDataDiscussions(Request $request)
    {
        $discussions = Discussions::with(['user', 'replies.user'])
            ->withCount('replies')
            ->where('course_id', $request->course_id)
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json($discussions);
    }

    public function store(Request $request)
    {
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
    public function replies(Request $request)
    {
        try {
            Replies::create([
                'discussion_id' => $request->discussion_id,
                'user_id' => Auth::id(),
                'content' => $request->content
            ]);

            return response()->json(['success' => true]);
        } catch (\Throwable $th) {
            return response()->json(['success' => false]);
        }
    }
}
