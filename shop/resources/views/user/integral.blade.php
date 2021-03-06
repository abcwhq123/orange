@extends('common/layouts')
@section('title')
用户积分
@stop
@section('content')
<!--积分样式-->
<div class="user_style clearfix">
  <div class="user_center">
   <!--左侧样式-->
   <div class="left_style">
    <div class="menu_style">
     <div class="user_title">用户中心</div>
     <div class="user_Head">
     <div class="user_portrait">
      <a href="#" title="修改头像" class="btn_link"></a> <img src="images/people.png">
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
          <li> <a href="user.php?act=order_list"> 我的订单</a></li>
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
        <li> <a href="user.php?act=tag_list">我的标签</a></li>
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
      <!--积分样式-->
      <div class="integral">
        <div class="title_Section"><span>用户积分</span></div>
               <div class="user_integral_style slideTxtBox">
         <div class="hd">
          <ul>
           <li>积分获取记录</li>
           <LI>积分使用记录</LI>
          </ul>
         </div>
         <div class="bd">
           <ul>
            <div class="Integral_Number"><em></em>你当前的积分：<b>3434</b></div>
            <table>
             <thead>
               <tr class="thead_title">
                <td>积分获取订单号</td>
                <td>订单金额</td>
                <td>积分</td>
                <td>获取日期</td>
               </tr>
             </thead>
             <tbody>
              <tr>
               <td>4546546546454</td>
               <td>￥345</td>
               <td>455</td>
               <td>2015-12-12 12:23:34</td>
              </tr>
               <tr>
               <td>4546546546454</td>
               <td>￥345</td>
               <td>455</td>
               <td>2015-12-12 12:23:34</td>
              </tr>
               <tr>
               <td>4546546546454</td>
               <td>￥345</td>
               <td>455</td>
               <td>2015-12-12 12:23:34</td>
              </tr>
               <tr>
               <td>4546546546454</td>
               <td>￥345</td>
               <td>455</td>
               <td>2015-12-12 12:23:34</td>
              </tr>
               <tr>
               <td>4546546546454</td>
               <td>￥345</td>
               <td>455</td>
               <td>2015-12-12 12:23:34</td>
              </tr>
               <tr>
               <td>4546546546454</td>
               <td>￥345</td>
               <td>455</td>
               <td>2015-12-12 12:23:34</td>
              </tr>
               <tr>
               <td>4546546546454</td>
               <td>￥345</td>
               <td>455</td>
               <td>2015-12-12 12:23:34</td>
              </tr>  
              <tr>
               <td>4546546546454</td>
               <td>￥345</td>
               <td>455</td>
               <td>2015-12-12 12:23:34</td>
              </tr> 
              <tr>
               <td>4546546546454</td>
               <td>￥345</td>
               <td>455</td>
               <td>2015-12-12 12:23:34</td>
              </tr> 
                         
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
           <ul>
           <div class="Integral_Number"><em></em>你消费的积分：<b>544</b></div>
           </ul>
         </div>
       </div>
       <script>jQuery(".slideTxtBox").slide({trigger:"click"});</script>
      </div>
    </div>
   </div>
  </div>
</div>
@stop