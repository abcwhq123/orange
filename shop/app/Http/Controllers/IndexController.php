<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class IndexController  extends Controller
{
	/*
	商城首页
	 */
	public function index(){
		return view('index.home');
	}
}	