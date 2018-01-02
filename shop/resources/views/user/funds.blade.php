@extends('common/layouts')
@section('title')
资金管理
@stop
@section('content')

<!--资金管理-->
 <div class="user_style clearfix">
  <div class="user_center">
  <!--左侧样式-->
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
      <!--资金管理-->
      <div class="title_Section"><span>资金管理</span></div>
      <div class="funds_style">
      <div class="user_operating">
       <div class="Balance"><img src="home/images/iconfont-zhanghuyue.png" /><h3>余额：<b>451.00</b></h3></div>
       <a href="#" class="Recharge_btn" id="Recharge" data-toggle="modal">充值</a><a href="#" class="withdraw_btn">提现</a>
       </div>
       <!--记录-->
       <div class="Details_list">
        <div class="hd"><ul><li>充值消费记录</li><li>提现记录</li></ul></div>
        <div class="bd">
        <ul class="consumption_list">
        <table>
         <thead>
          <tr><td class="label_1">操作时间</td><td class="label_2">类型</td><td class="label_3">金额</td><td class="label_4">备注</td></tr>
         </thead>
         <tbody>
          <tr><td>2016-2-23 12:23:34</td><td>消费</td><td>123.00</td><td>商城购物消费</td></tr>
           <tr><td>2016-2-23 12:23:34</td><td>提现</td><td>123.00</td><td>商城购物消费</td></tr>
           <tr><td>2016-2-23 12:23:34</td><td>消费</td><td>123.00</td><td>商城购物消费</td></tr>
           <tr><td>2016-2-23 12:23:34</td><td>消费</td><td>123.00</td><td>商城购物消费</td></tr>
           <tr><td>2016-2-23 12:23:34</td><td>消费</td><td>123.00</td><td>商城购物消费</td></tr>
           <tr><td>2016-2-23 12:23:34</td><td>消费</td><td>123.00</td><td>商城购物消费</td></tr>
           <tr><td>2016-2-23 12:23:34</td><td>消费</td><td>123.00</td><td>商城购物消费</td></tr>
         </tbody>
        </table>
          <div class="Paging">
    <div class="Pagination">
    <a href="#">首页</a>
     <a href="#" class="pn-prev disabled">&lt;上一页</a>
   <a href="#" class="on">1</a>
   <a href="#">2</a>
   <a href="#">3</a>
   <a href="#">4</a>
   <a href="#">下一页&gt;</a>
   <a href="#">尾页</a> 
     </div>
    </div>
        </ul>
        <ul class="withdraw_list">         
          <table>
         <thead>
          <tr>
          <td class="label_1">操作时间</td>
          <td class="label_2">类型</td>
          <td class="label_3">金额</td>
          <td class="label_4">会员备注</td>
          <td class="label_5">管理员备注</td>
          <td class="label_6">状态</td>
          <td class="label_7">操作</td>
          </tr>
         </thead>
         <tbody>
          <tr><td>2016-2-23 12:23:34</td><td>消费</td><td>123.00</td><td>商城购物消费</td><td>商城购物消费</td><td>已完成</td><td><a href="#">详细</a></td></tr>
           <tr><td>2016-2-23 12:23:34</td><td>提现</td><td>123.00</td><td>商城购物消费</td><td>商城购物消费</td><td>已完成</td><td><a href="#">详细</a></td></tr>
           <tr><td>2016-2-23 12:23:34</td><td>消费</td><td>123.00</td><td>商城购物消费</td><td>商城购物消费</td><td>已完成</td><td><a href="#">详细</a></td></tr>
           <tr><td>2016-2-23 12:23:34</td><td>消费</td><td>123.00</td><td>商城购物消费</td><td>商城购物消费</td><td>已完成</td><td><a href="#">详细</a></td></tr>
           <tr><td>2016-2-23 12:23:34</td><td>消费</td><td>123.00</td><td>商城购物消费</td><td>商城购物消费</td><td>已完成</td><td><a href="#">详细</a></td></tr>
           <tr><td>2016-2-23 12:23:34</td><td>消费</td><td>123.00</td><td>商城购物消费</td><td>商城购物消费</td><td>已完成</td><td><a href="#">详细</a></td></tr>
           <tr><td>2016-2-23 12:23:34</td><td>消费</td><td>123.00</td><td>商城购物消费</td><td>商城购物消费</td><td>已完成</td><td><a href="#">详细</a></td></tr>
         </tbody>
        </table> 
          <div class="Paging">
    <div class="Pagination">
    <a href="#">首页</a>
     <a href="#" class="pn-prev disabled">&lt;上一页</a>
   <a href="#" class="on">1</a>
   <a href="#">2</a>
   <a href="#">3</a>
   <a href="#">4</a>
   <a href="#">下一页&gt;</a>
   <a href="#">尾页</a> 
     </div>
    </div>     
        </ul>
       </div>
       </div>
         <script>jQuery(".Details_list").slide({trigger:"click"});</script>
      </div>
      
    </div>
   </div>
  </div>
 </div>

@stop