<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0032) -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Generator" content="ECSHOP v2.7.3">

<meta name="Keywords" content="">
<meta name="Description" content="">

<title>登录</title>
<style>
  .reg_btn {background-color: #FF5511; /* Green */border: none;color: white;padding: 15px 32px;width: 100%;height: 45px;border-radius: 3px;text-align: center;text-decoration: none;display: inline-block;font-size: 14px;/*margin: 2px 1px;*/cursor: pointer;-webkit-transition-duration: 0.4s; /* Safari */transition-duration: 0.4s;}
</style>
<link rel="shortcut icon" href="http://www.xianmeng.ren/favicon.ico">
<link rel="icon" href="http://www.xianmeng.ren/animated_favicon.gif" type="image/gif">
<link href="home/login/style.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="home/login/jquery-1.9.1.min.js"></script><script type="text/javascript" src="home/login/jquery.json.js"></script><script type="text/javascript" src="home/login/common.js"></script><script type="text/javascript" src="home/login/user.js"></script><script type="text/javascript" src="home/login/transport.js"></script><script type="text/javascript" src="home/login/utils.js"></script></head><body>  

<div id="header_top" class="flow_header">
  <div id="top">
      <div class="top">
        <div class="Collection"><em></em><a href="javascript:;" onclick="javascript:AddFavorite(&#39;四川鲜盟&#39;,location.href);">收藏我们</a></div>
      <div class="hd_top_manu clearfix">
          <ul class="clearfix">
            <li class="hd_menu_tit zhuce" id="TECHAN_MEMBERZONE">
                欢迎光临本店！
  <a href="{{ url('login') }}" class="red">[请登录]</a> 
  新用户<a href="{{ url('register') }}" class="red">[免费注册]</a>
            </li>
            <li class="hd_menu_tit"><a href="{{ url('userOrder') }}">我的订单</a></li> 
            <li class="hd_menu_tit"> <a href="{{ url('cart') }}">购物车</a> </li>
            <li class="hd_menu_tit"><a href="#">联系我们</a></li>
            <li class="hd_menu_tit list_name" data-addclass="hd_menu_hover">
              <a href="#" class="hd_menu">客户服务</a>
              <div class="hd_menu_list">
                <ul>
                  <li><a href="#">常见问题</a></li>
                <li><a href="#">在线退换货</a></li>
                  <li><a href="#">在线投诉</a></li>
                <li><a href="#">配送范围</a></li>
                </ul>
            </div>     
            </li>
              <li class="hd_menu_tit phone_c" data-addclass="hd_menu_hover"><a href="#" class="hd_menu "><em class="iconfont icon-phone"></em>手机版</a>
              <div class="hd_menu_list erweima">
                <ul>
                      <a href="http://www.xianmeng.ren/affiche.php?ad_id=32&amp;uri=javascript%3A%3B" target="_blank"><img src="home/login/1457634034749842096.jpg" width="200" height="200" border="0"></a>                </ul>
            </div>     
            </li>
          </ul>
      </div>
      </div>
  </div>
</div>  
 

<div class="log_bg">  
    <div class="log_top">
        <div class="logo"><a href="{{ url('index')}}"><img src="home/login/logo.png"></a></div>
    </div>
  <div class="login">
      <div class="log_img"><img src="home/login/l_img.png" width="611" height="425"></div>
          <div class="log_c">
          <form name="formLogin" action="" method="post" onsubmit="return userLogin()">
            <table border="0" style="width:370px; font-size:14px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tbody><tr height="50" valign="top">
                <td width="55">&nbsp;</td>
                <td>
                  <span class="fl" style="font-size:24px;">登录</span>
                    <span class="fr">还没有商城账号，<a href="{{ url('register')}}" style="color:#ff4e00;">立即注册</a></span>
                </td>
              </tr>
              <tr height="70">
                <td>用户名</td>
                <td><input type="text" value="" class="l_user" name="username"></td>
              </tr>
              <tr height="70">
                <td>密&nbsp; &nbsp; 码</td>
                <td><input type="password" value="" class="l_pwd" name="password"></td>
              </tr>
                            <tr>
                <td>&nbsp;</td>
                <td style="font-size:12px; padding-top:20px;">
                  <span style="font-family:&#39;宋体&#39;;" class="fl">
                      <label class="r_rad"><input type="checkbox" value="1" name="remember" id="remember" class="checkbox_txt"></label><label for="remember" class="r_txt">请保存我这次的登录信息。</label>
                    </span>
                    <span class="fr"><a href="#" style="color:#ff4e00;">忘记密码</a></span>
                </td>
              </tr>
              <tr height="60">
                <td>&nbsp;</td>
                <td>
                  <input type="submit" value="登录" class="reg_btn">
                </td>
              </tr>
            </tbody></table>
            </form>
        </div>
                    </div>
</div>
 

<div class="btmbg">
    <div class="btm">
        ICP备案证书号:蜀ICP备16017326号      © 2005-2017 鲜盟 版权所有，并保留所有权利。        
    </div>      
</div>
    
<script type="text/javascript">
var process_request = "正在处理您的请求...";
var username_empty = "- 用户名不能为空。";
var username_shorter = "- 用户名长度不能少于 3 个字符。";
var username_invalid = "- 用户名只能是由字母数字以及下划线组成。";
var password_empty = "- 登录密码不能为空。";
var password_shorter = "- 登录密码不能少于 6 个字符。";
var confirm_password_invalid = "- 两次输入密码不一致";
var email_empty = "- Email 为空";
var email_invalid = "- Email 不是合法的地址";
var agreement = "- 您没有接受协议";
var msn_invalid = "- msn地址不是一个有效的邮件地址";
var qq_invalid = "- QQ号码不是一个有效的号码";
var home_phone_invalid = "- 家庭电话不是一个有效号码";
var office_phone_invalid = "- 办公电话不是一个有效号码";
var mobile_phone_invalid = "- 手机号码不是一个有效号码";
var msg_un_blank = "* 用户名不能为空";
var msg_un_length = "* 用户名最长不得超过7个汉字";
var msg_un_format = "* 用户名含有非法字符";
var msg_un_registered = "* 用户名已经存在,请重新输入";
var msg_can_rg = "* 可以注册";
var msg_email_blank = "* 邮件地址不能为空";
var msg_email_registered = "* 邮箱已存在,请重新输入";
var msg_email_format = "* 邮件地址不合法";
var msg_blank = "不能为空";
var no_select_question = "- 您没有完成密码提示问题的操作";
var passwd_balnk = "- 密码中不能包含空格";
var username_exist = "用户名 %s 已经存在";
</script>


</body></html>