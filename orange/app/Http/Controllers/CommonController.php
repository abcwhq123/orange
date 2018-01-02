<?php
namespace App\Http\Controllers;
use App\Common;

class CommonController extends Controller{
    public function top(){
        return view('common/top');
    }
    public function menu(){
        return view('common/menu');
    }
    public function main(){
        return view('common/main');
    }

}