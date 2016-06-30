<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $table = 'admin_set';
	    protected $fillable= [
	    	'WebOwnName',
	    	'Id',
	    	'Password',
	    	'FooterTwitter',
	    	'FooterFacebook',
	    	'FooterGithub'
	    ];
	    //protected $guarded=['id','password'];
	public $timestamps = false;
}
