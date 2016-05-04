<?php
include("../conn.php");
if($act=="del")
{
	$sql="delete from admin where id=$id";
$result=mysql_query($sql);
echo "<SCRIPT LANGUAGE='JavaScript'>alert('管理员账号删除成功');location.href='admin.php';</SCRIPT>";
}
?><body topmargin="0" leftmargin="0" bottommargin="0">
 <br><link rel="stylesheet" type="text/css" href="skin/css/base.css">



<table width="96%"  border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#E7E7E7">
  <tr>
    <td colspan="4" class="title" bgcolor="#E7E7E7"><div align="center" class="title"> <div align="center" class="title"><a href="admin_add.php"> 添加管理员</a></div></td>
  </tr>

  <tr>
    <td width="6%" bgcolor="#E7E7E7">    <div align="center">序号</div></td>
    <td width="13%" bgcolor="#E7E7E7"><div align="center"><span class="Forumrow">管理员账号</span></div></td>


    <td width="6%" bgcolor="#E7E7E7"><div align="center">操作</div></td>
  </tr>
<?php
$sql="select * from admin order by id DESC";
$result=mysql_query($sql);
while($rs=mysql_fetch_array($result))
{
//print_r($rs);
?>
<tr onmouseover=this.style.backgroundColor="#F2F2F2" onmouseout=this.style.backgroundColor=""  bgcolor="#FFFFFF">
    <td><div align="center"><?php   echo $rs[id]; ?></div></td>
    <td>&nbsp;<div align="center"><?php   echo $rs["name"]; ?></div></td>

    <td><div align="center">
	<a href="admin_pwd.php?id=<?php   echo $rs[id]; ?>" >修改</a>

	<a href="?id=<?php   echo $rs[id]; ?>&act=del" onclick="{if(confirm('您确定要删除此住户吗?')){return true;}return false;}">删除</a></div></td>
  </tr>
  <?php
}
		?>