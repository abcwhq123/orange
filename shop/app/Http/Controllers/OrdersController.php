<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class OrdersController  extends Controller
{
	public function ordersConfirm() {
		return view('orders.orders_confirm');
	}
}