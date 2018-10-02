<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Post;
use App\Comment;
use TCG\Voyager\Models\Category;

class PostsController extends Controller

{

    public function index() 

    {
    	$posts = Post::latest()->get();

    	return view('frontend.blog.index', compact('posts'));
    }


    public function show($slug)

    {
    	$post = Post::where('slug', '=', $slug)->firstOrFail();

        $posts = Post::latest()->get();

        $comments = Comment::latest()->get();

        $category = Category::all();

        $category_name = Category::select('name');

        $d7 = \Carbon\Carbon::today()->addDays(7)->format('dm');
        $d14 = \Carbon\Carbon::today()->addDays(14)->format('dm');

    	return view('frontend.blog.show', compact('post','posts','comments', 'category', 'category_name', 'd7','d14'));

    }


    public function create() 

    {

        $posts = Post::latest()->get();

        $category = Category::all();

        return view('frontend.blog.create', compact('posts', 'category'));
    }


    public function store()

    {        
        $post = new Post;

        $slug = str_slug(request('title'), '-');

        $post->title = request('title');

        $post->body = request('body');

        $post->slug = $slug;

        $post->save();

        //Post::create(request(['title', 'body', 'slug']));

        return redirect('/blog')->with('success', true);

        // dd(request()->all());
    }
}