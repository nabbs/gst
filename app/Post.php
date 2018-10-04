<?php

namespace App;

class Post extends Model
{
    public function comments()

    {

    	return $this->hasMany(Comment::class);

    }

    public function category()

    {

    	return $this->hasMany(Category::class);

    }
}

