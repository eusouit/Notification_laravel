<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    public function index()
    {
        $posts = $this->post->with(['comments'] )->paginate();

        return view('posts.index', compact('posts'));
    }
    public function show($id)
    {
        $post = $this->post->with(['comments.user','user'] )->find($id);
        //dd($post);
        return view('posts.show', compact('post'));
    }
}
