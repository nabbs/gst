<?php

namespace App\Http\Controllers;

use \App\Comment;
use \App\Post;

class CommentsController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Post $post)
    {

         Comment::create([

            'name' => request('name'),
            'email' => request('email'),
            'body' => request('body'),
            'post_id' => $post->id,
            'status' => 'PENDING'
        ]);

          return redirect()->back()->with('success', true);
    }


    public function replies(Post $post)
    {
         $comments = Comment::with('replies')->commentsFor($post)->get();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
