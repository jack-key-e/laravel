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

Route::get('/',['as'=> 'home.index','uses' =>
'PostsController@indexpost']);

Route::get('/about',['as'=> 'about.index','uses' =>
'PostsController@about']);

Route::get('/hot',['as'=> 'post.hot',function () {
    return 'post.hot';
}]);

Route::get('random',['as'=> 'post.random',function () {
    return 'post.random';
}]);

Route::post('posts',['as'=> 'posts.store',function () {
    return 'posts.store';
}]);

Route::get('posts',['as'=> 'posts.index','uses' =>
'PostsController@index'
]);

Route::get('posts/create',['as'=> 'posts.create','uses' =>
'PostsController@create']);

Route::delete('posts/{id}',['as'=> 'posts.destory',function () {
    return 'posts.destory';
}]);

Route::patch('posts/{id}',['as'=> 'posts.update',function(){
	return 'posts.update';
}]);

Route::get('posts/{id}',['as'=> 'posts.show','uses' =>
'PostsController@show'
]);

Route::post('posts/{id}/comment',['as'=> 'posts.comment',function () {
    return 'posts.comment';
}]);

Route::get('posts/{id}/edit',['as'=> 'posts.edit','uses' =>
'PostsController@edit'
]);

Route::resource('comshow','PostsController@onelist'
,['names' => ['store' => 'coms.edit']]);

Route::get('contact',['as'=> 'home.contact','uses' =>
'PostsController@contact']);

Route::resource('admin','LoginController@login'
,['names'=>['store'=>'home.admin']
]);

Route::get('admintools/logout',['as'=> 'admintools.logout','uses' =>
'LoginController@logout']);

Route::get('admintools',['as'=> 'admintools.index','uses' =>
'LoginController@setting']);

//Route::get('admintools/update',['as'=> 'admintools.update','uses' =>
//'LoginController@update']);

Route::resource('admintools/update','LoginController@update'
,['names'=>['store'=>'admintools.update']
]);

Route::resource('admintools/about','LoginController@about'
,['names'=>['store'=>'admintools.about']
]);

Route::get('admintools/index',['as'=> 'admintools.indexset','uses' =>
'LoginController@indexset']);

Route::get('admintools/contact',['as'=> 'admintools.contact','uses' =>
'LoginController@contact']);

Route::get('admintools/postset',['as' => 'admintools.postset','uses' =>
'LoginController@posts']);

Route::get('admintools/postset/delete/{id}',['as' => 'admintools.postdel','uses' =>
'LoginController@postsdel']);

Route::resource('admintools/postset/{id}/update','LoginController@postupdate'
,['names'=>['store'=>'postset.update']
]);

Route::resource('admintools/postset/create','LoginController@postcreate'
,['names'=>['store'=>'postset.create']
]);
