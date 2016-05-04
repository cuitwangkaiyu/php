<?php
require "../conn.php";
if ( $id == "" ) exit( "i非法操作");
if ( $action == "save" )
{
$sql = "update categories set name='".$name."' where id=$id";
$result=mysql_query($sql);
echo "<script>alert('成功修改图书分类');location.href='class.php'</script>";

		exit( );
}
$sql = "select * from categories where id='".$id."'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$submitstring = $row['reid'] == "0" ? "修改顶级分类" : "修改子分类";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="skin/css/base.css">
<title>图书分类管理</title>
</head>
<body>
<table width="100%" border="0" id="table_style_all" cellpadding="0" cellspacing="0">
  <tr>
    <td id="table_style" class="l_t">&nbsp;</td>
    <td>&nbsp;</td>
    <td id="table_style" class="r_t">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
	<table width="100%" border="0" cellpadding="0" cellspacing="2">
     <tr>
      <td><strong>&nbsp;产品分类修改</strong></td>
     </tr>
	 <form action="?action=save" method="post">
     <tr>
      <td bgcolor="#FFFFFF">
       <table width="100%" cellspacing="0" cellpadding="0" border="0" id="table_border">
	    <tr>
		 <td id="row_style">&nbsp;分类名称:</td>
		 <td>
		 &nbsp;<input type="text" name="name" size="20" value="<?php echo $row['name']?>">
		 <input type="hidden" name="id" value="<?php echo $id?>">
		 </td>
	    </tr>
		<tr>
		 <td id="row_style">&nbsp;</td>
		 <td>&nbsp;<input type="submit" name="submit" value=" <?php echo $submitstring?> "></td>
	    </tr>
		</form>
	   </table>
	  </td>
	 </tr>
	</table>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td id="table_style" class="l_b">&nbsp;</td>
    <td>&nbsp;</td>
    <td id="table_style" class="r_b">&nbsp;</td>
  </tr>
</table>
</body>
</html>
