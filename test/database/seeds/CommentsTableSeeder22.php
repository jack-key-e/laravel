<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder{

    public  function  run(){
        foreach(range(1, 20)  as  $number){
            \App\Post::create([
                'name' => '名子'.$number,
                'email' => 'test'.$number.'@testemail.com',
                'content' => '這是文章內容',
                'page_view' => 1,
            ]);
        }
    }
}
?>