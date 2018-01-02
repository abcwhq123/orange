@extends('common/layouts')
@section('title')
用户收藏
@stop
@section('content')

<!--个人信息样式-->
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
       <li> <a href="user.php?act=account_log"> 资金管理</a></li>
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
     <!--个人信息-->
      <div class="Personal_info" id="Personal">
         <div class="title_Section"><span>个人信息</span></div>
         <ul class="xinxi">
          <li><label>出身日期：</label> <span class="time">1991年6月3日</span>
           <div class="add_time">
              <select name=""></select><select name=""></select><select name=""></select>
           </div>
          </li>
          <li><label>用户性别：</label> <span class="sex">男</span>
          <div class="add_sex">
          <input type="radio" name="sex" value="0" checked="checked">
                    保密&nbsp;&nbsp;
                    <input type="radio" name="sex" value="1">
                    男&nbsp;&nbsp;
                    <input type="radio" name="sex" value="2">
                  女&nbsp;&nbsp;</div></li>
          <li><label>电子邮箱：</label>  <span><input name="" type="text" value="234567777@qq.com"  class="text"  disabled="disabled"/></span></li>
          <li><label>用户QQ：</label>  <span><input name="" type="text" value="455656565"  class="text"  disabled="disabled"/></span></li>        
          <li><label>移动电话：</label>  <span><input name="" type="text" value="455656565"  class="text"  disabled="disabled"/></span></li>
          <li><label>固定电话：</label> <span><input name="" type="text" value="455656565"  class="text"  disabled="disabled"/></span></li>
          <div class="bottom"><input name="" type="submit" value="修改信息"  class="modify"/><input name="" type="submit" value="确认修改"  class="confirm"/></div>
         </ul>
         <ul class="Head_portrait">
          <li class="User_avatar"><img src="home/images/people.png" /></li>
          <li><input name="name" type="submit" value="上传头像"  class="submit"/></li>
         </ul>
      </div>
    </div>
    </div>
   </div>
</div>
@stop