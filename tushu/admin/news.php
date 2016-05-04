<?php
include("../conn.php");
if($act=="del")
mysql_query("delete from news where id=$id");
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>新闻公告管理</title>
<link rel="stylesheet" type="text/css" href="skin/css/base.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
<?php

           $sql1=mysql_query("select * from news order by addtime desc ");
?>
<form name="form1" method="post" action="?act=del">
<table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" bgcolor="#E7E7E7"><div align="center" >新闻公告管理</div></td>
  </tr>
  <tr>
    <td height="50" bgcolor="#E7E7E7"><table width="550" height="33" border="0" align="center" cellpadding="0" cellspacing="1">

      <tr>
        <td width="330" bgcolor="#FFFFFF"><div align="center">新闻公告主题</div></td>
        <td width="75" bgcolor="#FFFFFF"><div align="center">操作</div></td>
		        <td width="80" height="25" bgcolor="#FFFFFF"><div align="center">删除</div></td>

      </tr>
	    <?php

		   while($info1=mysql_fetch_array($sql1))
		    {
	  ?>
	  <tr>

        <td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $info1[title];?></div></td>
	    <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="news_edit.php?id=<?php echo $info1[id];?>">查看编辑</a></div></td>
		 <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="?act=del&id=<?php echo $info1[id];?>">删除</a></div></td>
	  </tr>
	  <?php
	       }

	  ?>
    </table></td>
  </tr>
</table>


</form>
</body>
</html>
