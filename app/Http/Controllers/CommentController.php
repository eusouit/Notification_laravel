<?php

namespace App\Http\Controllers;

use App\Notifications\PostCommented;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        //salvando acessando relacionamentos
        $comment = $request->user()->comments()->create($request->all());
        $author = $comment->post->user;
        $author->notify(new PostCommented($comment));
        return back();
    }
}
