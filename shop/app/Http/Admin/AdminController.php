<?php
/**
 * Created by PhpStorm.
 * User: kkk
 * Date: 2018/1/2
 * Time: 8:43
 */

namespace App\Http\Admin;

use App\Http\Controllers\Controller;

class AdminController  extends Controller
{
       public function index(){
           return view('admin\index\index');
       }
}