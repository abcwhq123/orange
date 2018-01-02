<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class LoginController  extends Controller
{
	/*
	登录
	 */
	public function login(){
		return view('login.login');
	}

	/*
	注册
	 */
	public function register(){
		return view('login.register');
	}
}