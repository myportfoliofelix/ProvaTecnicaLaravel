<?php

namespace App\Http\Controllers;

use App\Usuario;
use Request;
use SimplePie;
use Session;
use Illuminate\Support\Facades\Cache;

class Acesso extends Controller
{

    public function areaHome(){
    	$titulo = "HOME";

    	$feed = new SimplePie();
		$feed->set_feed_url('https://news.google.com/news/section?cf=all&hl=pt-BR&pz=1&ned=pt-BR_br&topic=n&output=rss');
		$feed->enable_order_by_date(true);
		$feed->enable_cache(false);
		$feed->set_cache_location(storage_path().'/cache');
		$feed->set_cache_duration(60*60*12);
		$feed->set_output_encoding('utf-8');
		$feed->init();

        $user = Session::get('user');

		return view('welcome')->with(['titulo'=>$titulo, 'feeds'=>$feed, 'user'=>$user]);
    }

 	public function areaCadastro(){
    	$titulo = "CADASTRO";
    	//$form = Form::open();
		return view('cadastro')->with("dados",$titulo);

	}
    
    public function cadastro(){

    	$usrName = Request::input('nome');
    	$usrEmail = Request::input('email');
    	$usrPsw = md5(Request::input('password'));
    	$dados = array(
    		"name"		=>	$usrName,
    		"email"		=>	$usrEmail,
    		"password" 	=> 	$usrPsw,
    	);
    	Usuario::create($dados);

    	return redirect()->action('Acesso@areaHome');
	}

    public function login(){

    	$email 	= Request::input('txtEmail');
    	$psw 	= md5(Request::input('txtPsw'));
    	$dados = array(
    		"email"	=>	$email,
    		"password"	=>	$psw
    	);
    	
    	$return = Usuario::login($dados);
    	
    	if($return == NULL){
    		echo "ERROR";
    	}else{
    		//$_SESSION['user'] = json_encode($return);
            $user = Session::put('user', json_encode($return));
    		//echo $_SESSION['user'];
    		return redirect()->action('Acesso@areaHome');
    	}
    	
	}


	public function logout(){
		Session::flush();
        return redirect()->action('Acesso@areaHome');
	}

}
