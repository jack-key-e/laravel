<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder{

    public  function  run(){
        foreach(range(1, 20)  as  $number){
            \App\Post::create([
                'name' => 'name'.$number,
                'email' => 'test'.$number.'@testemail.com',
                'content' => 'test_content',
                'page_view' => 1,
            ]);
        }
    }
}
?>