<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Show all posts
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', ['posts' => $posts]);
    }

    // Create a new post
    public function create() {
        return view('posts.create');
    }

    // Store post in database
    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file_name = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $file_name);

        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $file_name
        ]);
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Post created Successfully!');
    }
}
