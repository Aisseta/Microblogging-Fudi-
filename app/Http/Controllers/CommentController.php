<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'post_id' => 'required|exists:posts.id', 
        ]);
    
        //$user = auth()->user()->id;
        


        Comment::create([
            'content' => $request->input('body'),
            'post_id' =>$request->input('post_id')
             
        ]);

        return back();
    }
}
