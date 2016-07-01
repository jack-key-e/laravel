<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    public function login(){
        if (isset($_POST['back'])&&!empty($_POST['back'])) {
            $url = "../";
                echo "<script type='text/javascript'>";
                echo "window.location.href='$url'";
                echo "</script>";
                return 0;
        }
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

    public function logout(){
        if (isset($_COOKIE['access'])) {
            unset($_COOKIE['access']);
            setcookie("access", null, -1, '/');
        }
        $url = "../admintools";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>"; 
    }

    public function setting(){
        if(isset($_COOKIE['access'])){
            $Acountcheck = \App\login::all();
            $value = $Acountcheck->toArray();
            if ($_COOKIE['access']==$value[0]['Password']) {
                $Webname = \App\login::all();
                $data = compact('Webname');
                return view('admintools.index',$data);
            }
        }
        $url = "../admin";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>"; 

    }
    public function update(){
        if(isset($_COOKIE['access'])){
            $Acountcheck = \App\login::all();
            $value = $Acountcheck->toArray();
            if ($_COOKIE['access']==$value[0]['Password']) {
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
                $Webname = \App\login::all();
                $data = compact('Webname');
                return view('admintools.index',$data);
            }
        }
        $url = "../admintools";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>"; 
    }

    public function about(){
        if(isset($_COOKIE['access'])){
            $Acountcheck = \App\login::all();
            $value = $Acountcheck->toArray();
            if ($_COOKIE['access']==$value[0]['Password']) {
                if(isset($_POST['AboutTitle'])&&!empty($_POST['AboutTitle'])){
                    \App\indexabot::where('search',1)
                    ->update(['AboutTitle'=>$_POST['AboutTitle']]);
                }
                if(isset($_POST['AboutSubTitle'])&&!empty($_POST['AboutSubTitle'])){
                    \App\indexabot::where('search',1)
                    ->update(['AboutSubTitle'=>$_POST['AboutSubTitle']]);
                }
                if(isset($_POST['AboutContent'])&&!empty($_POST['AboutContent'])){
                    \App\indexabot::where('search',1)
                    ->update(['AboutContent'=>$_POST['AboutContent']]);
                }
                $about = \App\indexabot::all();
                $Webname = \App\login::all();
                $data = compact('about','Webname');
                return view('admintools.about',$data);
            }
        }
        $url = "../admin";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>"; 
    }

    public function indexset(){
        if(isset($_COOKIE['access'])){
            $Acountcheck = \App\login::all();
            $value = $Acountcheck->toArray();
            if ($_COOKIE['access']==$value[0]['Password']) {
                //sql code
                if(isset($_GET['IndexTitle'])&&!empty($_GET['IndexTitle'])){
                    \App\indexabot::where('search',1)
                    ->update(['IndexTitle'=>$_GET['IndexTitle']]);
                }
                if(isset($_GET['IndexSubTitle'])&&!empty($_GET['IndexSubTitle'])){
                    \App\indexabot::where('search',1)
                    ->update(['IndexSubTitle'=>$_GET['IndexSubTitle']]);
                }
                //sql code end
                $index = \App\indexabot::all();
                $Webname = \App\login::all();
                $data = compact('index','Webname');
                return view('admintools.indexset',$data);
            }
        }
        $url = "../admin";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>"; 
    }

    public function contact(){
        if(isset($_COOKIE['access'])){
            $Acountcheck = \App\login::all();
            $value = $Acountcheck->toArray();
            if ($_COOKIE['access']==$value[0]['Password']) {
                //sql code
                if(isset($_GET['ContactTitle'])&&!empty($_GET['ContactTitle'])){
                    \App\postcontact::where('id',1)
                    ->update(['ContactTitle'=>$_GET['ContactTitle']]);
                }
                if(isset($_GET['ContactSubTitle'])&&!empty($_GET['ContactSubTitle'])){
                    \App\postcontact::where('id',1)
                    ->update(['ContactSubTitle'=>$_GET['ContactSubTitle']]);
                }
                if(isset($_GET['ContactContent'])&&!empty($_GET['ContactContent'])){
                    \App\postcontact::where('id',1)
                    ->update(['ContactContent'=>$_GET['ContactContent']]);
                }
                
                //sql code end
                $contact = \App\postcontact::all();
                $Webname = \App\login::all();
                $data = compact('Webname','contact');
                return view('admintools.contact',$data);
            }
        }
        $url = "../admin";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>"; 
    }
}
