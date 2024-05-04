<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;


class FontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $featured = Post::latest()->first();
        $posts = Post::orderBy('created_at', 'desc')->take(3)->paginate(3);

       //return $featured;
        return view('home', compact('posts', 'featured'));
    }



    /**
     * Display the specified resource.
     */
    public function show(Post $post, Request $request)
    {
       
        //dd($post);
        $comments = Comment::with('user')->get();
       
        
        //return $comments;
        return view('details', compact('post', 'comments'));
    }

}
