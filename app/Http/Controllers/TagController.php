<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    function index(){
        // Eloquent ORM -> Get all data
        $data = Tag::all();


        // pass the data to the view
        return view('tag.index',['tags' => $data,'pageTitle' => 'Tags']);

    }


    function create(){
        Tag::create([
            'title' => 'CSS',
            
        ]);

        return redirect('/tags');
    }


    function delete(){
        Tag::destroy(1);
    }

    function testManyToMany () {
        
    }
}
