<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Page;

use App\Mail\sendmail;

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


    public function contact() 
    {
        $name = request('name');
        $email = request('email');
        $message = request('message');
        
        Mail::to('info@gosearchtravel.com')->send(new sendmail($name, $email, $message));

        return view('frontend.pages.thanks');
    }
}
