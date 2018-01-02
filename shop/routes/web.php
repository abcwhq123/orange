<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index.home');
});

/*
首页
 */
Route::any('index', ['uses' => 'indexController@index']);//首页
/*
品牌
*/
Route::any('brand', ['uses' => 'BrandController@brand']);// 品牌列表

/*
产品
 */
Route::any('limitBuy', ['uses' => 'ProductController@limitBuy']);//限时抢购

Route::any('limitBuyInfo', ['uses' => 'ProductController@limitBuyInfo']);//限时抢购详细信息

Route::any('productInfo', ['uses' => 'ProductController@productInfo']);// 产品详细信息

Route::any('productList', ['uses' => 'ProductController@productList']);//产品列表

Route::any('cart', ['uses' => 'ProductController@cart']);// 购物车

/*
登录注册
 */
Route::any('login', ['uses' => 'LoginController@login']);//登录

Route::any('register', ['uses' => 'LoginController@register']);// 注册


/*
订单
 */
Route::any('ordersConfirm', ['uses' => 'OrdersController@ordersConfirm']);// 订单确认

/*
用户
*/
Route::any('user', ['uses' => 'UserController@user']);// 用户中心

Route::any('userAddress', ['uses' => 'UserController@userAddress']);// 收货地址

Route::any('changePassword', ['uses' => 'UserController@changePassword']);//  修改密码

Route::any('collect', ['uses' => 'UserController@collect']);// 用户收藏

Route::any('coupon', ['uses' => 'UserController@coupon']);// 优惠券

Route::any('funds', ['uses' => 'UserController@funds']);// 资金管理

Route::any('integral', ['uses' => 'UserController@integral']);// 用户积分

Route::any('userOrder', ['uses' => 'UserController@userOrder']);// 用户订单

Route::any('userInfo', ['uses' => 'UserController@userInfo']);// 用户信息



/*
 *   后台路由
 */
    Route::any('backstage', ['uses' => '\App\Http\Admin\AdminController@index']);// 用户信息