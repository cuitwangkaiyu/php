<?php
require("../conn.php");
//�����ļ�
$sql="select * from admin where id=$id";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
if($act=="save")
{
	$sql="update admin set admin_name='$Username',admin_psw='$Password_new' where id=$id";
$result=Connect_db($sql);
echo "<SCRIPT LANGUAGE='JavaScript'>alert('����Ա�˺��޸ĳɹ�');location.href='admin.php';</SCRIPT>";
}
?>
<script>
function check_form()
{

	var name = document.getElementById("Username");
	var psw = document.getElementById("Password_new");
	var psw2 = document.getElementById("Password_new2");

if(name.value == "")
	{
		alert("�ʺŲ���Ϊ��");
		name.focus();
		return false;
	}
if(psw.value == "")
	{
		alert("���벻��Ϊ��");
		psw.focus();
		return false;
	}
	if(psw2.value == "")
	{
		alert("�ظ����벻��Ϊ��");
		psw2.focus();
		return false;
	}
	if(psw2.value != psw.value)
	{
		alert("2�����벻һ��");
		psw2.focus();
		return false;
	}

document.form1.submit();

}
</script><meta http-equiv="Content-Type" content="text/html; charset=gb2312">

  <br><link rel="stylesheet" type="text/css" href="skin/css/base.css">


  <table width="97%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableBorder">
	<form action="?id=<?php echo $data[id]?>&act=save" method="post" name="form1" onsubmit="check_form();return false;">
    <tr>
      <td colspan="3" class="title"></div></td>
    </tr>
    <tr>
      <td colspan="3" class="title2">&nbsp;�����޸���վ�Ĺ���Ա</td>
    </tr>
    <tr>
      <td width="16%" class="table">&nbsp;����Ա�û���</td>
      <td width="84%" colspan="2" class="table"><input name="Username" type="text" id="UserName3" value="<?php echo $data[name]?>" readonly>
      &nbsp;<font class="alert"></font></td>
    </tr>

    <tr>
      <td class="table">&nbsp;����������</td>
      <td colspan="2" class="table"><input name="Password_new" type="password" id="Password_new"></td>
    </tr>
    <tr valign="top">
      <td class="table"><p align="left">&nbsp;��������������</p></td>
      <td colspan="2" class="table"><input name="Password_new2" type="password" id="Password_new2"></td>
    </tr>

    <tr>
      <td colspan="3" class="table"><div align="center">
          <input type="submit" name="Submit3" value="�ύ">
&nbsp;
          <input type="reset" name="Submit22" value="����">
      </div></td>
    </tr>
</form>
</table>


