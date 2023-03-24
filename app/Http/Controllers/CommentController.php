<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\RedirectResponse;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $comments = Comment::latest()->paginate(5);
        // dd($comments);
        return view('comments.index', compact('comments'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'body' => 'required|max:255',
            'rating' => 'required|max:255',
        ]);

        $comment = new Comment([
            'body' => $validatedData['body'],
            'rating' => $validatedData['rating'],
            'status' => 'pending'
        ]);

        $user = User::findOrFail($request->input('user_id'));
        $comment->user()->associate($user);

        $music = Music::findOrFail($request->input('music_id'));
        $comment->music()->associate($music);

        $comment->save();

        return redirect()->back()->with('success', 'Your comment has been added successfully and is awaiting approval.');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $comment->status = $request->input('status');
        $comment->save();

        return redirect()->route('comments.index')->with('success', 'Commentaire approuvé.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->back();
    }
}
