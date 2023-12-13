<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        return view('post', [
            'post' => Post::all()
        ]);
    }


    public function create() {
 
        return view('create');
    }
    public function show(Post $post) {

        return view('onepost', [
            'onepost' => $post
        ]);
    }

    public function store(Request $request) {
  
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
            'caption' => 'required',
        ]);
    
        //$user = auth()->user();
        


        $post = Post::create([
            'title' => $request->title,
            'caption' => $request->caption,
            'image' => time() . '.' . $request->image->getClientOriginalExtension(),
        ]);
    
        $request->image->storeAs('public/images', $post->image);

        return redirect()->route('post.index');
    }    
}
