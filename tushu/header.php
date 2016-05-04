<?php
session_start();
require("conn.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

  <title>在线图书销售系统</title>

  <link href="./css/layout.css" type="text/css" rel="stylesheet" />

  </head>

  <body>
        <center><img src="./img/banner.jpg" width="966"></center>
		<div class="topmenu cbody1">
			<ul>
				<li class="thisclass">
					<A href="index.php">网站首页</A>
				</li>
					<li class="thisclass">
					<A href="tuijian.php" >推荐图书</A>
				</li>
				<li class="thisclass">
					<A href="tejia.php" >特价图书</A>
				</li>
				<li class="thisclass">
					<A href="new.php" >最新图书</A>
				</li>
				<li class="thisclass">
					<A href="user.php" >会员中心</A>
				</li>
				<li class="thisclass">
					<A href="cart.php" >我的购物车</A>
				</li>
				<li class="thisclass">
					<A href="myOrder.php" >我的订单</A>
				</li>
				<li class="thisclass">
					<A href="guest.php" >我要留言</A>
				</li>
			</ul>
		</div>
		<form id="searchForm" action="./search.php" method="post">
			<div class="topsearch">
				<div class="title"></div>
				<div id="page_search_left">
					<input class="inputText" id="goodsName" size="16" onkeypress="if(event.keyCode==13){searchFormSubmit();return false;}" name="goodsName" type="text" />
				</div>
				<div id="page_search_btn">
					<input type="submit" value="搜索">
				</div>
				<div id="page_search_right">
					<script>
						<!--var day="";
						var month="";
						var ampm="";
						var ampmhour="";
						var myweekday="";
						var year="";
						mydate=new Date();
						myweekday=mydate.getDay();
						mymonth=mydate.getMonth()+1;
						myday= mydate.getDate();
						year= mydate.getFullYear();
						if(myweekday == 0)
						weekday=" 星期日 ";
						else if(myweekday == 1)
						weekday=" 星期一 ";
						else if(myweekday == 2)
						weekday=" 星期二 ";
						else if(myweekday == 3)
						weekday=" 星期三 ";
						else if(myweekday == 4)
						weekday=" 星期四 ";
						else if(myweekday == 5)
						weekday=" 星期五 ";
						else if(myweekday == 6)
						weekday=" 星期六 ";
						document.write(year+"年"+mymonth+"月"+myday+"日 "+weekday);
						//-->
					</script>
				</div>
				<div style="clear: both"></div>
			</div>
		</form>
