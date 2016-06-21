<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    public function index(){
        if (!isset($_GET['p'])) {
            $page = 1;
        }else{
            $page = $_GET['p'];
        }
        $Postcounter = \App\Post::count();
    	$posts = \App\Post::OrderBy('id','DESC')->forpage($page,5)->get();
    	$data = compact('posts','Postcounter','page');
    	return view('posts.index',$data);
    }

    public function indexpost(){
    	$posts =\App\Post::OrderBy('id','DESC')->Limit(5)->get();
        $data = compact('posts');
    	return view('index',$data);
    }

    public function show($id){
    	$posts = \App\post::find($id);
    	$data = compact('posts');
    	return view('post.index',$data);
    }

    public function onelist(Request $request){
    	if(!isset($_POST["text"])){
    		echo "out";
    		if(isset($_GET["tex"]))
    			echo '<br>'.$_GET["tex"];
    		$data = ['letter' => 'no data'];
    		return view('comshow',$data);
    	}else{
    		echo "in";
    		if(isset($_POST["text"]))
    		echo '<br>'.$_POST["text"];

    		return view('comshow');
    	}
    }
}
