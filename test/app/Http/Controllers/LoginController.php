<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    public function login (){
        if(isset($_COOKIE['access'])){
            $Acountcheck = \App\login::all();
            $value = $Acountcheck->toArray();
            if ($_COOKIE['access']==$value[0]['Password']) {
                $url = "../admintools";
                echo "<script type='text/javascript'>";
                echo "window.location.href='$url'";
                echo "</script>"; 
            }
        }
        $Webname = \App\login::all();
        $data = compact('Webname');
    	if (isset($_POST['acount'])) {
    		$id = $_POST['acount'];
    		$pw = $_POST['password'];
    		$Acountcheck = \App\login::all();
    		$value = $Acountcheck->toArray();
    		if ($value[0]['Id']==$id && $value[0]['Password']==md5($pw)) {
                setcookie('access',md5($pw), time() + (86400), "/");
                $url = "../admintools";
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
    public function setting(){
        if(!isset($_COOKIE['access'])){
            $Acountcheck = \App\login::all();
            $value = $Acountcheck->toArray();
            if ($_COOKIE['access']==$value[0]['Password']) {
                $url = "../admintools";
                echo "<script type='text/javascript'>";
                echo "window.location.href='$url'";
                echo "</script>"; 
            }
        }
        $Web = \App\login::all();
        $data = compact('Web');
        return view('admintools.index',$data);
    }
    public function update(){
        if(!isset($_COOKIE['access'])){
            $Acountcheck = \App\login::all();
            $value = $Acountcheck->toArray();
            if ($_COOKIE['access']==$value[0]['Password']) {
                $url = "../admintools";
                echo "<script type='text/javascript'>";
                echo "window.location.href='$url'";
                echo "</script>"; 
            }
        }else{
            if(isset($_GET['WebName'])&&!empty($_GET['WebName'])){
                \App\login::where('num',1)
                ->update(['WebOwnName'=>$_GET['WebName']]);
            }
            if(isset($_GET['FacebookId'])&&!empty($_GET['FacebookId'])){
                \App\login::where('num',1)
                ->update(['FooterFacebook'=>$_GET['FacebookId']]);
            }
            if(isset($_GET['TwitterId'])&&!empty($_GET['TwitterId'])){
                \App\login::where('num',1)
                ->update(['FooterTwitter'=>$_GET['TwitterId']]);
            }
            if(isset($_GET['GithubId'])&&!empty($_GET['GithubId'])){
                \App\login::where('num',1)
                ->update(['FooterGithub'=>$_GET['GithubId']]);
            }
            $Web = \App\login::all();
            $data = compact('Web');
            return view('admintools.index',$data);
        }
    }
}
