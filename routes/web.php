<?php

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

if (setting('site.website_status')==1) {
    
    Route::get('/sitemap',function(){
    return response()->view('sitemap')
      ->header('Content-Type', 'xml');
    });


    Route::post('/contact', 'PagesController@contact');

    Route::get('/blog/category/{category}', 'PostsController@showcategory');

    Route::get('/blog', 'PostsController@index');
    
	Route::post('/subscribe', 'SubscribeController@create');

	Route::post('/blog/posts','PostsController@store');

	Route::post('/blog/{post}/comments','CommentsController@store');

	Route::get('/','HomeController@index');

	Route::get('/blog/create','PostsController@create');

	Route::get('/blog/{slug}', 'PostsController@show');	

	Route::get('/home','HomeController@index');

	Route::get('/flights','FlightsController@index');

	Route::get('/hotels','HotelsController@index');

	Route::get('/carhire','CarhireController@index');

	Route::get('/holidays','HolidaysController@index');

	Route::get('/hajj', 'HajjsController@index');

	Route::post('/hajj/search', 'HajjsController@search');

	Route::post('/hajj', 'HajjsController@store');

	Route::get('/umrah','UmrahController@index');

	Route::get('/cruise','CruisesController@index');

	Route::get('/cruise/search','CruisesController@search');

	Route::get('/pages', 'PagesController@index');

	Route::get('/{slug}', 'PagesController@show');

	Route::get('/artisan/{cmd}', function($cmd) {
	    $cmd = trim(str_replace("-",":", $cmd));
	    $validCommands = ['cache:clear', 'optimize', 'route:cache', 'route:clear', 'view:clear', 'config:cache'];
	    if (in_array($cmd, $validCommands)) {
	        Artisan::call($cmd);
	        return "<h1>Ran Artisan command: {$cmd}</h1>";
	    } else {
	        return "<h1>Not valid Artisan command</h1>";
	    }
	});
}

else{

	Route::any('', 'HomeController@offline');
}


