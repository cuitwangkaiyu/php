<?php
require "../conn.php";
if ( $action == "save" )
{
		if ( $reid == "" )
		{
				$addsql = "insert into categories(name,reid) values('".$name."','0')";
		}
		else
		{
				$addsql = "insert into categories(name,reid) values('".$name."','{$reid}')";

		}
		mysql_query($addsql);
echo "<script>alert('�ɹ����ͼ�����');location.href='class.php'</script>";

		exit();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="skin/css/base.css">
<title>�������</title>
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
      <td><strong>&nbsp;ͼ���������</strong>&nbsp;&nbsp;<a href="?action=new">��Ӷ�������</a> </td>
     </tr>
	 <form action="?action=save" method="post">
     <tr>
      <td bgcolor="#FFFFFF">

<?php
if($action == "new")//����·���
{
$submitstring = $reid == "" ? " ��Ӷ������� " : " ����ӷ��� ";

?>
<table width="100%" cellspacing="0" cellpadding="0" border="0" id="table_border">

	    <tr>
		 <td id="row_style">&nbsp;��������:</td>
		 <td>&nbsp;<input type="text" name="name" size="20"><input type="hidden" name="reid" value="<?php echo $reid?>"></td>
	    </tr>
		<tr>
		 <td id="row_style">&nbsp;</td>
		 		 <td>&nbsp;<input type="submit" name="submit" value="<?php echo $submitstring?> "></td>
	    </tr>
		</form>
	   </table>
<?php
}//����ӷ������
else
{
?>
	  <table width="100%" cellspacing="0" cellpadding="0" border="0" id="table_border">
	  <tr class='row_color_head'><td>����</td><td>����</td></tr>
<?php
//ȡ��������
$sql="select * from categories where reid=0";
$result=mysql_query($sql);
while($data=mysql_fetch_array($result))
	{
?>

	  <tr><td>&nbsp;&nbsp;<font color=blue size=4><?php echo $data[name]?></font></td><td><a href=class_edit.php?id=<?php echo $data[id]?>>�޸�</a> | <a
	  href=class_del.php?id=<?php echo $data[id]?>>ɾ��</a> | <a href=?action=new&reid=<?php echo $data[id]?>>������</a></td></tr>
<?php
		  //���ݶ�������idȡ�ӷ���
 $sql2="select * from categories where reid=$data[id]";

	  $result2=mysql_query($sql2);
	  while($data2=mysql_fetch_array($result2))
		{

?>
	  <tr class='row_color_gray'><td>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- <?php echo $data2[name]?></td><td><a href=class_edit.php?id=<?php echo $data2[id]?>>�޸�</a> | <a href=class_del.php?id=<?php echo $data2[id]?>>ɾ��</a></td></tr>



<?php
		}
 }
echo  "</table>";

}
?>

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
