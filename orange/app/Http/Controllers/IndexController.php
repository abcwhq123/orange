<?php
namespace App\Http\Controllers;
use App\Index;

class IndexController extends Controller{
    public function index(){
        return view('index/index');
    }

}