<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Place;
use App\Hotdeal;
use App\Post;
use App\Slider;

class homeController extends Controller
{
    public function offline()
    {
    	return view('frontend.offline.index');
    }

    public function index()
    {
    	$places = Place::latest()->get();

    	$hotdeals = Hotdeal::latest()->get();

    	$posts = Post::latest()->take(6)->get();

        $sliders = Slider::all();

    	return view('frontend.home.index', compact('places', 'hotdeals', 'posts', 'sliders'));
    }

}
