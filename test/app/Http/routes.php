<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['as'=> 'home.index',function () {
    return view('index');
}]);

Route::get('/about',['as'=> 'about.index',function () {
    return view('about');
}]);

Route::get('/hot',['as'=> 'post.hot',function () {
    return 'post.hot';
}]);

Route::get('random',['as'=> 'post.random',function () {
    return 'post.random';
}]);

Route::post('posts',['as'=> 'posts.store',function () {
    return 'posts.store';
}]);

Route::get('posts',['as'=> 'posts.index',function () {
    return 'posts.index';
}]);

Route::get('posts/create',['as'=> 'posts.create',function () {
    return 'posts.create';
}]);

Route::delete('posts/{id}',['as'=> 'posts.destory',function () {
    return 'posts.destory';
}]);

Route::patch('post/{id}',['as'=> 'posts.update',function(){
	return 'posts.update';
}]);

Route::get('post/{id}',['as'=> 'posts.show',function () {
    return 'posts.show';
}]);

Route::post('post/{id}/comment',['as'=> 'posts.comment',function () {
    return 'posts.comment';
}]);

Route::get('post/{id}/edit',['as'=> 'posts.edit',function () {
    return 'posts.edit';
}]);

/*
	Route::get('/about',['as'=> 'about.index',function () {
	    return 'about.index';
	}]);

	Route::get('/hot',['as'=> 'post.hot',function () {
	    return 'post.hot';
	}]);

	Route::get('random',['as'=> 'post.random',function () {
	    return 'post.random';
	}]);

	Route::post('posts',['as'=> 'posts.store',function () {
	    return 'posts.store';
	}]);

	Route::get('posts',['as'=> 'posts.index',function () {
	    return 'posts.index';
	}]);

	Route::get('posts/create',['as'=> 'posts.create',function () {
	    return 'posts.create';
	}]);

	Route::delete('posts/{id}',['as'=> 'posts.destory',function () {
	    return 'posts.destory';
	}]);

	Route::patch('post/{id}',['as'=> 'posts.update',function(){
		return 'posts.update';
	}]);

	Route::get('post/{id}',['as'=> 'posts.show',function () {
	    return 'posts.show';
	}]);

	Route::post('post/{id}/comment',['as'=> 'posts.comment',function () {
	    return 'posts.comment';
	}]);

	Route::get('post/{id}/edit',['as'=> 'posts.edit',function () {
	    return 'posts.edit';
	}]);
*/