<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    public function index(){
    	$posts = \App\Post::all();
    	$data = compact('posts');
    	return view('posts.index',$data);
    }

    public function show($id){
    	$post = \App\post::find($id);
    	$data = compact('post');
    	return view('posts.index',$data);
    }
}
