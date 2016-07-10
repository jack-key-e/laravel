<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    
    function __construct(){
        

    }
    public function index(){
        if (!isset($_GET['p'])) {
            $page = 1;
        }else{
            $page = $_GET['p'];
        }
        $Postcounter = \App\Post::count();
        $Webname = \App\login::all();
        $Alltitle = \App\postcontact::all();
    	$posts = \App\Post::OrderBy('id','DESC')->forpage($page,5)->get();
    	$data = compact('posts','Postcounter','page'
        ,'Alltitle','Webname');
    	return view('posts.index',$data);
    }

    public function indexpost(){
    	$posts =\App\Post::OrderBy('id','DESC')->Limit(5)->get();
        $Webname = \App\login::all();
        $Alltitle = \App\indexabot::all();
        $data = compact('posts','Alltitle','Webname');
    	return view('index',$data);
    }

    public function show($id){
    	$posts = \App\post::find($id);
        $Alltitle = \App\postcontact::all();
        $Webname = \App\login::all();
    	$data = compact('posts','Alltitle','Webname');
    	return view('post.index',$data);
    }

    public function onelist(Request $request){
    	if(!$request->has('text')){
    		echo "out";
    		if(isset($_GET["tex"]))
    			echo '<br>'.$_GET["tex"];
    		$data = ['letter' => 'no data'];
    		return view('comshow',$data);
    	}else{
    		echo "in";
    		if(isset($_POST["text"]))
            $input = $request->only('text');
            echo $input['text'];
    		return view('comshow');
    	}
    }

    public function about(){
        $Alltitle = \App\indexabot::all();
        $Webname = \App\login::all();
        $data = compact('Alltitle','Webname');
        return view('about.index',$data);
    }

    public function contact(){
        $Alltitle = \App\postcontact::all();
        $Webname = \App\login::all();
        $data = compact('Alltitle','Webname');
        return view('contact',$data);
    }
}
