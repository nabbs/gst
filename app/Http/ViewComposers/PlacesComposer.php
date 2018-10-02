<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class PlacesComposer
{
    public $featured = [];

    public function __construct()
    {
        $this->featured = Place::all();
    }

    public function compose(View $view)
    {
        $view->with('place', end($this->featured));
    }
}