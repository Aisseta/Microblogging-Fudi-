<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
  
       $request->validate ([
            "image" => 'required|image|max:1024',
            "caption" => 'required',
        ]);
    
        $post = new Post;

        $post->caption = $request->input('caption');
        $post->user_id = auth()->id(); // Associe le post à l'utilisateur connecté
        $post->image = $request->file('image')->store('images/posts', 'public');
        
    
        $post->save();

        //return redirect(route("post.index"));
    }    
}
