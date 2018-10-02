<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarhireController extends Controller
{
    public function index()
    {
    	return view('frontend.carhire.index');
    }
}
