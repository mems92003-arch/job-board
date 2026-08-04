<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function index(){ 
        // Eloquent ORM -> Get all data
        $date = Comment::all();


        // pass the data to the view
        return view('comment.index',['comments' => $date,'pageTitle' => 'Blog']);

    }


    function show($id){
        $comment = Comment::findOrFail($id);
        return view('comment.show',['comment' => $comment,'pageTitle' => $comment->title]);
        

    }


    function create(){
        // Comment::create([            
        //     'author' => 'Ayman',
        //     'content' => 'This is a test comment',
        //     'post_id' => true
        // ]);

        Comment::factory(100)->create();

        return redirect('/comments');
    }
}
