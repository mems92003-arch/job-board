<?php

namespace App\Http\Controllers;
use App\Models\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $date = Comment::all();
        return view('comment.index',['comments' => $date,'pageTitle' => 'Blog']);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment.create',['pageTitle' => 'Blog - Create New Comment']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // @TODO : this will be completed in form section

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // @TODO : this will be completed in form section

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('comment.edit',['pageTitle' => 'Blog - Edit Comment']);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // @TODO : this will be completed in form section

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // @TODO : this will be completed in form section

    }
}
