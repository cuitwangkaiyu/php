<?php
session_start();
require("conn.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

  <title>����ͼ������ϵͳ</title>

  <link href="./css/layout.css" type="text/css" rel="stylesheet" />

  </head>

  <body>
        <center><img src="./img/banner.jpg" width="966"></center>
		<div class="topmenu cbody1">
			<ul>
				<li class="thisclass">
					<A href="index.php">��վ��ҳ</A>
				</li>
					<li class="thisclass">
					<A href="tuijian.php" >�Ƽ�ͼ��</A>
				</li>
				<li class="thisclass">
					<A href="tejia.php" >�ؼ�ͼ��</A>
				</li>
				<li class="thisclass">
					<A href="new.php" >����ͼ��</A>
				</li>
				<li class="thisclass">
					<A href="user.php" >��Ա����</A>
				</li>
				<li class="thisclass">
					<A href="cart.php" >�ҵĹ��ﳵ</A>
				</li>
				<li class="thisclass">
					<A href="myOrder.php" >�ҵĶ���</A>
				</li>
				<li class="thisclass">
					<A href="guest.php" >��Ҫ����</A>
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
					<input type="submit" value="����">
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
						weekday=" ������ ";
						else if(myweekday == 1)
						weekday=" ����һ ";
						else if(myweekday == 2)
						weekday=" ���ڶ� ";
						else if(myweekday == 3)
						weekday=" ������ ";
						else if(myweekday == 4)
						weekday=" ������ ";
						else if(myweekday == 5)
						weekday=" ������ ";
						else if(myweekday == 6)
						weekday=" ������ ";
						document.write(year+"��"+mymonth+"��"+myday+"�� "+weekday);
						//-->
					</script>
				</div>
				<div style="clear: both"></div>
			</div>
		</form>
