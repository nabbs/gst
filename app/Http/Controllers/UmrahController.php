<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Umrah;

class UmrahController extends Controller
{
    public function index() {

    	$umrahItems = Umrah::latest()->get();

    	return view('frontend.umrah.index', compact('umrahItems'));
    }
}
