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
    
        $user = auth()->user()->id;
        


        $post = Post::create([
            'title' => $request->title,
            'caption' => $request->caption,
            'image' => time() . '.' . $request->image->getClientOriginalExtension(),
            'user_id'=>$user, 

        ]);
    
        $request->image->storeAs('public/images', $post->image);

        return redirect()->route('post.index');
    } 
    

    public function destroy (Post $post)
    {
        $post->delete(); //supprimer le post
        return redirect()->route('post.index'); //redirection vers la page .index
    }

    public function like(Post $post)
    {
        $user = auth()->user();
        
        if(!$user->likes()->where('post_id', $post->id)->exists()) {
             $user->likes()->attach($post);
        }else{

            $user->likes()->detach($post);
        }
           
        return redirect()->back();
        }    
}

