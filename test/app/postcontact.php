<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postcontact extends Model
{
    protected $table = 'postcontact';
	    protected $fillable= [
	    	'PostTitle',
	    	'PostSubTitle',
	    	'ContactTitle',
	    	'ContactSubTitle'
	    ];
	    protected $guarded=['id'];
}
