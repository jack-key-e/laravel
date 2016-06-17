<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post2 extends Model
{
    protected $table = 'table_comment';
	protected $fillable= [
	    	'neme',
	    	'email',
	    	'content',
	    	'page_view'
	    ];
	protected $guarded=['id','password'];
}
