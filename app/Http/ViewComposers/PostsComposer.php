<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class PostsComposer
{
    public $gpost = [];

    public function __construct()
    {
        $this->gpost = Post::all();
    }

    public function compose(View $view)
    {
        $view->with('blog', end($this->gpost));
    }
}