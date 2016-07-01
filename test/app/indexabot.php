<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class indexabot extends Model
{
    protected $table = 'indexabout';
	    protected $fillable= [
	    	'IndexTitle',
	    	'IndexSubTitle',
	    	'AboutTitle',
	    	'Password',
	    	'AboutSubTitle',
	    	'AboutContent'
	    ];
	protected $guarded=['search'];
	public $timestamps = false;
}
