<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    public function login (){
        $Webname = \App\login::all();
        $data = compact('Webname');
    	if (isset($_POST['acount'])) {
    		$id = $_POST['acount'];
    		$pw = $_POST['password'];
    		$Acountcheck = \App\login::all();
    		$value = $Acountcheck->toArray();
    		if ($value[0]['Id']==$id && $value[0]['Password']==md5($pw)) {
    		  $url = "../admintools/index";
                echo "<script type='text/javascript'>";
                echo "window.location.href='$url'";
                echo "</script>"; 
    		}
            $condition = '帳號或密碼錯誤';
            $data = compact('Webname','condition');
            return view('admin',$data);
    	}
    	return view('admin',$data);
    }
}
