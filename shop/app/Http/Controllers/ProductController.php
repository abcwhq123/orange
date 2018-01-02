<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController  extends Controller
{

	/*
	产品列表
	 */
	public function productList(){
		return view('product.product_list');
	}
	/*
	限时抢购页面
	 */
	public function limitBuy(){
		return view('product.limit_buy');
	}

	/*
	限时抢购详细页面
	 */
	public function limitBuyInfo(){
		return view('product.limit_but_info');
	}

	/*
	订单详细页面
	 */
	public function productInfo(){
		return view('product.product_info');
	}

	/*
	购物车
	 */
	public function cart(){
		return view('product.cart');
	}
}	