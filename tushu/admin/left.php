<html>
<head>
<title>menu</title>
<link rel="stylesheet" href="skin/css/base.css" type="text/css" />
<link rel="stylesheet" href="skin/css/menu.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<script language='javascript'>var curopenItem = '1';</script>
<script language="javascript" type="text/javascript" src="skin/js/frame/menu.js"></script>
<base target="main" />
</head>
<body target="main">
<table width='99%' height="100%" border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td style='padding-left:3px;padding-top:8px' valign="top">
	<!-- Item 1 Strat -->
      <dl class='bitem'>
        <dt onClick='showHide("items1_1")'><b>图书管理</b></dt>
        <dd style='display:block' class='sitem' id='items1_1'>
          <ul class='sitemu'>
            <li>
              <div class='items'>
                <div class='fllct'><a href='class.php' target='main'>图书分类管理</a></div>

              </div>
            </li>
            <li><a href='chubanshe.php' target='main'>出版社管理</a> </li>
            <li>
              <div class='items'>
                <div class='fllct'><a href='shu_add.php' target='main'>添加图书</a></div>
              </div>
            </li>
            <li><a href='shu.php' target='main'>图书管理</a> </li>
            <li><a href='shu_s.php' target='main'>图书查询</a> </li>

          </ul>
        </dd>
      </dl>
      <!-- Item 1 End -->
      <!-- Item 2 Strat -->
      <dl class='bitem'>
        <dt onClick='showHide("items2_1")'><b>注册会员管理</b></dt>
        <dd style='display:block' class='sitem' id='items2_1'>
          <ul class='sitemu'>
            <li><a href='user.php' target='main'>注册会员管理</a></li>
            <li><a href='user_s.php' target='main'>注册会员查询</a></li>
          </ul>
        </dd>
      </dl>
      <!-- Item 2 End -->

	  <dl class='bitem'>
        <dt onClick='showHide("items3_1")'><b>订单管理</b></dt>
        <dd style='display:block' class='sitem' id='items3_1'>
          <ul class='sitemu'>
            <li><a href='order.php' target='main'>订单处理</a></li>
            <li><a href='order_s.php' target='main'>订单查询</a></li>
          </ul>
        </dd>
      </dl>

	    <dl class='bitem'>
        <dt onClick='showHide("items4_1")'><b>留言公告管理</b></dt>
        <dd style='display:block' class='sitem' id='items4_1'>
          <ul class='sitemu'>
            <li><a href='guest.php' target='main'>网站留言管理</a></li>
            <li><a href='news_add.php' target='main'>新闻公告添加</a></li>
	<li><a href='news.php' target='main'>新闻公告管理</a></li>

          </ul>
        </dd>
      </dl>
	    <dl class='bitem'>
        <dt onClick='showHide("items5_1")'><b>管理员管理</b></dt>
        <dd style='display:block' class='sitem' id='items5_1'>
          <ul class='sitemu'>
            <li><a href='admin_add.php' target='main'>管理员添加</a></li>
            <li><a href='admin.php' target='main'>管理员管理</a></li>
	<li><a href='pwd.php' target='main'>修改密码</a></li>

          </ul>
        </dd>
      </dl>
	  </td>
  </tr>
</table>
</body>
</html>