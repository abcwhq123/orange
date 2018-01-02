<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/14
 * Time: 18:19
 */

namespace App\Http\Controllers;
use App\Member;

class MemberController extends Controller{
    public function info(){
        return Member::getMember();
       // return 'member-info';
        return view('member/info');
    }

}