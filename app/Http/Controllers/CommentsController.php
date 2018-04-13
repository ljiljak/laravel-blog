<?php

namespace App\Http\Controllers;

use App\Mail\CommentReceived;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentsController extends Controller
{
    public function store($postId)
    {
        $post = Post::find($postId);

        $this->validate(request(), [
            'text' => 'required|min:15'
        ]);

        $post->comments()->create(request()->all());

        Mail::to($post->user)->send(new CommentReceived($post));
        return redirect()->back();
    }
}