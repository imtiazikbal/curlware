<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('user_id', auth()->user()->id)->get();
        return view('backend.pages.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.post.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //Validation Data
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'image' => ['required', 'image'], 
        ]);

        $img = $request->file('image');
        $t = time();
        $file_name = $img->getClientOriginalName();
        $img_name = "{$t}-{$file_name}";
        $imgUrl = "uploads/blog/{$img_name}";

        // Image this save destination
        $img->move(public_path('uploads/blog'), $img_name);


        //Create Post [ user->hasMany -> post] and [post->beLongsTo]
        
        auth()->user()->posts()->create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'image' => $imgUrl           
        ]);

        
        // return post index page
        
        return redirect()->route('posts')->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('backend.pages.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {

        //Validation Data [ Here Image Validation not required ]
        
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            
          
        ]);

        // If image file upload user then this execute run
        
        if($request->has('image')){
            $img = $request->file('image');

            $t = time();
            $file_name = $img->getClientOriginalName();
            $img_name = "{$t}-{$file_name}";
            $imgUrl = "uploads/blog/{$img_name}";
    
            // Upload File
            $img->move(public_path('uploads/blog'), $img_name);
    
    
            auth()->user()->posts()->create([
                'title' => $validatedData['title'],
                'content' => $validatedData['content'],
                'image' => $imgUrl           
            ]);
        return redirect()->route('posts')->with('success', 'Blog Updated successfully.');


        // If image file not upload user then this execute run
        }else{
            $post->update([
                'title' => $validatedData['title'],
                'content' => $validatedData['content'],
                'image' => $post->image  
            ]);
        return redirect()->route('posts')->with('success', 'Blog Updated successfully.');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {

        // post delete image delete
        File::delete(public_path($post->image));
        $post->delete();
        
    }
}
