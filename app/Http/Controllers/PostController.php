<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        
        return view('blog.index', ['posts' => $posts]);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $uri_title
     * @return \Illuminate\Http\Response
     */
    public function show($uri_title)
    {
        $post = Post::where('uri_title', $uri_title)->first();

        return view('blog.show', ['post' => $post]);
    }
}
