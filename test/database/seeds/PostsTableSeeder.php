<?php

use Illuminate\Database\Seeder;

class  PostsTableSeeder  extends  Seeder   { 
	public  function  run(){
		foreach(range(1, 20)  as  $number){
			\App\Post::create(['title'  =>  'test text'.$number,
				'sub_title'  =>  'test sub_title',
				'content'  =>  'test_content',
				'page_view'  =>  1,
			]);
		}
	}   
}
?>