<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

class PagesController extends Controller
{
    public function index() 
    {
    	$pages = Page::all();

    	return view('frontend.pages.index', compact('pages'));
    }

    public function show($slug) 
    {
		$page = Page::where('slug', '=', $slug)->firstOrFail();
		
		return view('frontend.pages.page', compact('page'));
    }
}
