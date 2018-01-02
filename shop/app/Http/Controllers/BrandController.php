<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class BrandController  extends Controller
{
	/*
	品牌列表
	 */
	public function Brand(){
		return view('brand.brands');
	}
}	