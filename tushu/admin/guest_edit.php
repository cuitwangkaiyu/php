<?php include("check_login.php"); ?>
<html>
<head>
<title>编辑留言</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" type="text/css" href="skin/css/base.css">
</head>
<?php
include("../conn.php");
$id=$_GET[id];
$sql=mysql_query("select * from liuyan where id='".$id."'",$conn);
$data=mysql_fetch_array($sql);

?>
<body topmargin="0" leftmargin="0" bottommargin="0" >


<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>
    <td height="30" bgcolor="#E7E7E7"><div align="center">留言查看</div></td>
  </tr>
  <tr>
    <td height="100" bgcolor="#000000"><table width="750" height="100" border="0" align="center" cellpadding="0" cellspacing="1">
        <tr>
          <td width="87" height="25" bgcolor="#FFFFFF"><div align="center">留言主题:</div></td>
          <td width="392" height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $data[title];?></div></td>
          <td width="83" bgcolor="#FFFFFF"><div align="center">留言时间:</div></td>
          <td width="183" bgcolor="#FFFFFF"><div align="center"><?php echo $data[time];?></div></td>
        </tr>
        <tr>
          <td height="100" bgcolor="#FFFFFF"><div align="center">留言内容:</div></td>
          <td colspan="3" bgcolor="#FFFFFF"><div align="left">
		<?php echo $data[content];?>
		  </div></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td height="20"><div align="center">&nbsp;<input type="button" value="返回" class="buttoncss" onClick="javascript:history.back();"></div></td>
  </tr>

</table>
</body>
</html>
