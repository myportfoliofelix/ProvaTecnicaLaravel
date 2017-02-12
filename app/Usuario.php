<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;


class Usuario extends Model{

	//protected $table = "users";

	public static function create($dados){
		DB::table('users')->insert([$dados]);
    	//DB::table('users')->insert(["name"=>"fernando", "email"=>"teste@teste.com", "password"=>$dados['password']]);
    	//DB::insert('insert into users (name, email, password) values(?,?,?)', ['fernando','test@tst.com','123456']);
		echo "ok";
	}

	public static function login($dados){
		$email = $dados['email'];
		$psw = $dados['password'];
		$return = DB::table('users')->whereEmailAndPassword($email, $psw)->first();
		//$return = DB::table('users')->where($dados)->first();
		if(!$return){
			$return = NULL;
		}
		
		return $return;
	}
}
