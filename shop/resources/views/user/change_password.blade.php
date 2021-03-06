@extends('common/layouts')
@section('title')
密码修改
@stop
@section('content')
<!--修改密码-->
<div class="user_style clearfix">
  <div class="user_center">
    <div class="left_style">
    <div class="menu_style">
     <div class="user_title">用户中心</div>
     <div class="user_Head">
     <div class="user_portrait">
      <a href="#" title="修改头像" class="btn_link"></a> <img src="home/images/people.png">
      <div class="background_img"></div>
      </div>
      <div class="user_name">
       <p><span class="name">化海天堂</span><a href="#">[修改密码]</a></p>
       <p>访问时间：2016-1-21 10:23</p>
       </div>           
     </div>
     <div class="sideMen">
     <!--菜单列表图层-->
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_1"></em>订单中心</dt>
      <dd>
        <ul>
          <li> <a href="User_Orderform.html"> 我的订单</a></li>
          <li> <a href="User_address.html">收货地址</a></li>
          <li> <a href="user.php?act=booking_list"> 缺货登记</a></li>
        </ul>
      </dd>
    </dl>
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_2"></em>会员中心</dt>
        <dd>
      <ul>
        <li> <a href="User_Personalinfo.html"> 用户信息</a></li>
        <li> <a href="User_Collect.html"> 我的收藏</a></li>
        <li> <a href="user.php?act=message_list"> 我的留言</a></li>
        <li> <a href="User_changePassword.html">修改密码</a></li>
        <li> <a href="User_integral.html">我的积分</a></li>
        <li><a href="user.php?act=comment_list"> 我的评论</a></li>
      </ul>
    </dd>
    </dl>
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_3"></em>账户中心</dt>
      <dd>
       <ul>
      <li> <a href="user.php?act=bonus">我的红包</a></li>
      <li><a href="user.php?act=group_buy">我的团购</a></li>
       <li> <a href="user.php?act=track_packages"> 跟踪包裹</a></li>
       <li> <a href="User_funds.html"> 资金管理</a></li>
      </ul>
     </dd>
    </dl>
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_4"></em>分销中心</dt>
      <dd>
        <ul>
          <li> <a href="user.php?act=myshop">店铺管理</a></li>
          <li> <a href="user.php?act=myguide">我的盟友</a></li>
          <li> <a href="user.php?act=myaccount"> 我的佣金</a></li>
          <li> <a href="user.php?act=account_raply">申请提现</a></li>
        </ul>
      </dd>
    </dl>
    </div>
      <script>jQuery(".sideMen").slide({titCell:"dt", targetCell:"dd",trigger:"click",defaultIndex:0,effect:"slideDown",delayTime:300,returnDefault:true});</script>
   </div>  
  </div>
  <!--右侧样式-->
   <div class="right_style">
     <div class="info_content">
<!--修改密码样式-->
       <div class="change_Password">
           <div class="title_Section"><span>修改密码</span></div>
           <ul class="p_modify">
              <div class="Note">暂只支持原密码修改，不支持邮箱电话验证密码修改</div>
              <li><label>原密码</label><input name="" type="Password"  class="text_Password"/></li>
              <li class="new_password">
                <label>新密码</label>
                <div class="ywz_zhuce_xiaoxiaobao">
			  <div class="ywz_zhuce_kuangzi"><input name="tbPassword" type="password" id="tbPassword" class="ywz_zhuce_kuangwenzi1 text_Password"></div>
			<div class="ywz_zhuce_huixian" id="pwdLevel_1">弱 </div>
			<div class="ywz_zhuce_huixian" id="pwdLevel_2">中 </div>
			<div class="ywz_zhuce_huixian" id="pwdLevel_3">强 </div>
		     </div>
            <div class="ywz_zhuce_yongyu1">
            <span id="pwd_err" style="color: rgb(255, 0, 0)">6-16位，由字母（区分大小写）、数字、符号组成</span>
		     </div>
              </li>            
              <li><label>确认密码</label><input name="" type="Password"  class="text_Password"/></li>
              <li><input name="submit" type="submit" class="bnt_blue_1" style="border:none;" value="确认修改"></li>
           </ul>
       </div>
     </div>
    </div>  
  </div>
 </div>
 @stop