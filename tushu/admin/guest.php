<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>���԰�ģ��</title><body topmargin="0" leftmargin="0" bottommargin="0">
<link rel="stylesheet" type="text/css" href="skin/css/base.css">


 <?php
require("../conn.php");

if($act=="del")
{
	$sql="delete from liuyan where id=$id";
	mysql_query($sql);
}
if($act=="update")
{
if($replay=="" )
	{
	echo "<script>alert('���Իظ�����Ϊ��');history.back();</script>";
	exit;
	}
$sql="update liuyan set replay='$replay',rtime=NOW() where id=$id";
$res=mysql_query($sql);
if($res)
	{
	echo "<script>alert('�ظ��ɹ�');location.href='?act=view&id=$id';</script>";
	exit;
	}
	else

	exit("ʧ����");
	}

if($act!="view")
{
	  ?>
<table width="640" class="table_southidc" border="1" align="center" cellpadding="0" cellspacing="0">
<form name="form1" method="post" action="guest_del.php">
  <tr bgcolor="#E7E7E7">
    <td height="20" colspan="2"><div align="center">�û����Թ���</font></div></td>
  </tr>
  <tr>
    <td height="40" colspan="2" bgcolor="#E7E7E7"><table width="740" class="table_southidc"  border="0" align="center" cellpadding="0" cellspacing="1">
        <tr>
          <td width="184" height="20" bgcolor="#FFFFFF"><div align="center">��������</div></td>
          <td width="150" bgcolor="#FFFFFF"><div align="center">����ʱ��</div></td>
          <td width="127" bgcolor="#FFFFFF"><div align="center">��������</div></td>
		   <td width="82" bgcolor="#FFFFFF"><div align="center">������</div></td>
          <td width="49" bgcolor="#FFFFFF"><div align="center">ɾ��</div></td>		   <td width="82" bgcolor="#FFFFFF"><div align="center">�鿴�ظ�</div></td>

        </tr>
		 <?php



			 $sql1=mysql_query("select * from liuyan order by addtime desc ",$conn);
             while($info1=mysql_fetch_array($sql1))
		     {
		  ?>
        <tr>
          <td height="20" bgcolor="#FFFFFF"><div align="left"><?php echo $info1[title];?></div></td>

          <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[addtime];?></div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[content];?></div></td>
		            <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[userid];?></div></td>

          <td height="20" bgcolor="#FFFFFF"><div align="center">
<a href="?act=del&id=<?php echo $info1[id]?>"> ɾ��</a>
            </div></td>  <td height="20" bgcolor="#FFFFFF"><div align="center">
<a href="?act=view&id=<?php echo $info1[id]?>"> �鿴�ظ�</a>
            </div></td>
        </tr>
		<?php
		 }
		?>
      </table></td>
  </tr>


  </form>
</table>
  <?php
}
if($act=="view")
{
  ?>
<p>&nbsp;</p>
    <?php
				  $sql="select * from liuyan where id=$id";
				  $res=mysql_query($sql);
				$d=mysql_fetch_array($res);

				  ?>
                  <form name="form2" method="post" action="?act=update&id=<?php echo $id?>">
  <table width="740" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="30" colspan="2" align="center">���Իظ�</td>
    </tr>
    <tr>
      <td width="321" height="30" align="right">���Ա���:</td>
      <td width="413" height="30"><?php echo $d[title]?></td>
    </tr>
    <tr>
      <td height="30" align="right">��������:</td>
      <td height="30"><?php echo $d[content]?></td>
    </tr>
    <tr>
      <td height="30" align="right">�ظ�:</td>
      <td height="30">
        <label for="replay"></label>
        <textarea name="replay" id="replay" cols="45" rows="5"><?php echo $d[replay]?></textarea>
     </td>
    </tr>
    <tr>
      <td height="30" colspan="2" align="center"><input type="submit" name="button" id="button" value="�ظ�����">
      <a href="guest.php">����</a></td>
    </tr>
  </table>
   </form>
<?php
}
  ?>

</body>
</html>
