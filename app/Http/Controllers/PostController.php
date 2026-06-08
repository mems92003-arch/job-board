<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        // Eloquent ORM -> Get all data
        $data = Post::all();


        // pass the data to the view
        return view('post.index',['posts' => $data,'pageTitle' => 'Blog']);

    }


    function show($id){
        $post = Post::findOrFail($id);
        return view('post.show',['post' => $post,'pageTitle' => $post->title]);
        

    }


    function create(){
        $post = Post::create([
            'title' => 'My frist post',
            'body' => 'This is my content',
            'aouthor' => 'Ayman',
            'published' => true
        ]);

        return redirect('/blog');
    }
}
