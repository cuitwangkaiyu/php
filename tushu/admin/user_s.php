<?php include("../conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�û�����</title>
<link rel="stylesheet" type="text/css" href="skin/css/base.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body topmargin="0" leftmargin="0" bottommargin="0">



<form name="form2" method="post" action="">
<div align="center">
  <label for="textfield"></label>
  �������û��ʺ�
  <input type="text" name="name" id="name">
  <input type="submit" name="button" id="button" value="����">
  </div>
</form>
<?php
if($name!="")
{
?>

<form name="form1" method="post" action="user_del.php">

  <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>
    <td height="30" bgcolor="#E7E7E7"><div align="center" >�û���ѯ</div></td>
  </tr>
  <tr>
    <td  bgcolor="#E7E7E7"><table width="700" border="0" align="center" cellpadding="0" cellspacing="1">
       <?php
$sql="select * from `user` where name='$name'";
             $sql1=mysql_query($sql);


	   ?>
	   <tr>
          <td width="94" height="20" bgcolor="#FFFFFF"><div align="center">�û��ʺ�</div></td>
          <td width="93" bgcolor="#FFFFFF"><div align="center">�绰</div></td>
          <td width="79" bgcolor="#FFFFFF"><div align="center">email</div></td>
          <td width="79" bgcolor="#FFFFFF"><div align="center">����</div></td>

          <td width="79" bgcolor="#FFFFFF"><div align="center">ɾ��</div></td>
          <td width="75" bgcolor="#FFFFFF"><div align="center">�鿴��Ϣ</div></td>

        </tr>
       <?php
	      while($data1=mysql_fetch_array($sql1))
		     {
	   ?>
	   <tr>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $data1[name];?></div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center">
<?php echo $data1[tel];?>
          </div></td>
		  <td height="20" bgcolor="#FFFFFF"><div align="center">
<?php echo $data1[email];?>
          </div></td>
		    <td height="20" bgcolor="#FFFFFF"><div align="center">
<?php echo $data1[truename];?>
          </div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center">
          <input type="checkbox" name="<?php echo $data1[id];?>" value=<?php echo $data1[id];?>></div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><a href="user_view.php?id=<?php echo $data1[id];?>">�鿴�û�</a></div></td>

        </tr>
		<?php
	        }

		?>
    </table></td>
  </tr>
</table>



</form>
<?php
}
else
echo "��������Ҫ���ҵ��ʺ�";
?>
</body>
</html>
