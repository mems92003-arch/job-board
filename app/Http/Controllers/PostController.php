<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        // Eloquent ORM -> Get all data
        $data = Post::cursorPaginate(5);


        // pass the data to the view
        return view('post.index',['posts' => $data,'pageTitle' => 'Blog']);

    }


    function show($id){
        $post = Post::findOrFail($id);
        return view('post.show',['post' => $post,'pageTitle' => $post->title]);
        

    }


    function create(){
        // $post = Post::create([
        //     'title' => 'My frist post',
        //     'body' => 'This is my content',
        //     'published' => true
        // ]);

        Post::factory(100)->create();

        return redirect('/blog');
    }


    function delete(){
        Post::destroy(1);
    }
}
