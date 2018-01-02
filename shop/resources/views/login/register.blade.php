<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0045) -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Generator" content="ECSHOP v2.7.3">

<meta name="Keywords" content="">
<meta name="Description" content="">

<title>注册</title>
<style>
  .reg_btn {
    background-color: #FF5511; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    width: 100%;
    height: 45px;
    border-radius: 3px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    /*margin: 2px 1px;*/
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
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
        <div class="logo"><a href="{{url('index')}}"><img src="home/login/logo.png"></a></div>
    </div>
  <div class="login">
      <div class="log_img"><img src="home/login/l_img.png" width="611" height="425"></div>
                      <div class="reg_c">
          <form action="" method="post" name="formUser" onsubmit="return register();">
            <table border="0" style="width:420px; font-size:14px; margin-top:20px;" cellspacing="0" cellpadding="0">
              <tbody><tr height="50" valign="top">
                <td width="95">&nbsp;</td>
                <td>
                  <span class="fl" style="font-size:24px;">注册</span>
                    <span class="fr">已有商城账号，<a href="{{ url('login') }}" style="color:#ff4e00;">我要登录</a></span>
                </td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;用户名 &nbsp;</td>
                <td><input type="text" value="" class="l_user" name="username" id="username"></td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;密码 &nbsp;</td>
                <td><input type="password" value="" class="l_pwd" name="password" id="password"></td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;确认密码 &nbsp;</td>
                <td><input type="password" value="" class="l_pwd" name="confirm_password" id="confirm_password"></td>
              </tr>
              <!-- <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;手机 &nbsp;</td>
                <td class="mobile_verify">
                  <input type="text" value="" class="l_tel" name="mobile_phone" id="mobile_phone"/>
                    <a class="send_btn" href="javascript:;" onclick="javascript:send_sms(this);" data-status="0">获取短信验证码</a>
                    <span class="send_out">已发送（60）<span>
                </td>
              </tr> -->
                            <tr height="70">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;验证码&nbsp;</td>
                <td><input type="text" size="4" name="captcha" class="coLogin_txt_2"><img src="home/login/captcha.php" alt="captcha" style="vertical-align: middle;cursor: pointer;" onclick="this.src=&#39;captcha.php?is_register=1&amp;&#39;+Math.random()"></td>
              </tr>
                            <!-- <tr>
                <td align="right"><font color="#ff4e00">*</font>&nbsp;验证码&nbsp;</td>
                <td><input type="text" name="mobile_verify" class="l_ipt" value=""></td>
              </tr> -->
              
              <tr>
                <td>&nbsp;</td>
                <td style="font-size:12px; padding-top:20px;">
                  <span style="font-family:&#39;宋体&#39;;" class="fl">
                      <label class="r_rad"><input name="agreement" type="checkbox" value="1" checked="checked" class="checkbox_txt"></label>
                      <label class="r_txt">我已看过并接受《<a href="http://www.xianmeng.ren/article.php?cat_id=-1" style="color:blue" target="_blank">用户协议</a>》</label>
                    </span>
                </td>
              </tr>
              <tr height="60">
                <td>&nbsp;</td>
                <td>
                  <input name="act" type="hidden" value="act_register">
                <input type="hidden" name="back_act" value="">
                  <input type="submit" value="立即注册" class="reg_btn">
                </td>
              </tr>
            </tbody></table>
            </form>
        </div>
        <script type="text/javascript">
          function send_sms(me){
            var mobile = $('#mobile_phone').val();
            if($(me).data("status") == 1){
              return false;
            }

            var reg = /^[\d|\-|\s]+$/;
          if (!reg.test(mobile))
          {
            alert("请输入正确的手机号码！");
              return false;
          }
            $(me).data("status","1");
            
            $.post("user.php?act=send_sms", {"mobile": mobile},function(result){
          if (result.code==100){
            alert('手机验证码已经成功发送到您的手机');
            change_str(me);
          } else {
            if(result.msg){
              alert(result.msg);
            } else {
              alert('手机验证码发送失败');
            }
            $(me).data("status","0");
          }
        }, "json");
          }
          
          function change_str(me){
            var len_time = 60;
        $('.send_btn').css('display','none');
        $('.send_out').css('display','inline-block');
        
        var timer = setInterval(function(){
          len_time--; 
          if(len_time > 0){
            var str = "已发送(" + len_time +")";
          } else {
            var str = "已发送（60）";
            $('.send_btn').css('display','inline-block');
            $('.send_out').css('display','none');
            clearInterval(timer);
            len_time = 60;
          }
          $('.send_out').html(str);
        },1000);
          }
        </script>
            </div>
</div>
 

<div class="btmbg">
    <div class="btm">
        ICP备案证书号:蜀ICP备16017326号      © 2005-2017 四川鲜盟 版权所有，并保留所有权利。        
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