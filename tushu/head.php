
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
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
					<A href="./qiantai/default.jsp">�̳���ҳ</A>
				</li>
				<li class="thisclass">
					<A href="#" onclick="myXinxi()">�ҵ���Ϣ</A>
				</li>
				<li class="thisclass">
					<A href="#" onclick="myCart()">�ҵĹ��ﳵ</A>
				</li>
				<li class="thisclass">
					<A href="#" onclick="myOrder()">�ҵĶ���</A>
				</li>
				<li class="thisclass">
					<A href="#" onclick="liuyanAll()">��Ҫ����</A>
				</li>
			</ul>
		</div>
		<form id="searchForm" action="./goodSearch.action" method="post">
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
