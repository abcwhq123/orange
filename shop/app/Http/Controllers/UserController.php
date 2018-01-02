<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UserController  extends Controller
{
	/*
	用户中心
	 */
	public function user(){
		return view('user.user');
	}

	/*
	收货地址管理
	 */
	public function userAddress(){
		return view('user.address');
	}

	/*
	修改密码
	 */
	public function changePassword(){
		return view('user.change_password');
	}

	/*
	用户收藏
	 */
	public function collect(){
		return view('user.collect');
	}

	/*
	优惠券
	 */
	public function coupon(){
		return view('user.coupon');
	}

	/*
	资金管理
	 */
	public function funds(){
		return view('user.funds');
	}

	/*
	用户积分
	 */
	public function integral(){
		return view('user.integral');
	}

	/*
	用户订单
	 */
	public function userOrder(){
		return view('user.user_order');
	}

	/*
	用户信息
	 */
	public function userInfo(){
		return view('user.user_info');
	}
}