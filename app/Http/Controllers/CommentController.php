<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
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
        
        // Here validation only for comment only comment message is required
       // dd($request->all());
        $validate =  $request->validate([
            
            'message' => 'required','max:255'
        ]);

        // store comment 
        Comment::create([
            'text' => $validate['message'],
            'post_id' => $request->post_id,
            'user_id' => auth()->user()->id
            
        ]);

        return back();                                              
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        // specific data show for edit comment
        
       return response()->json($comment);
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
       
        // Here validation only for comment only comment message is required
        $validate =  $request->validate([

            'text' => 'required',
        ]);

        $comment->update([
            'text' => $validate['text']
            
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Comment updated successfully',
        ]);

            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        // delete comment

        $comment->delete();
    }
}
