<?php
session_start();
require("conn.php");
if($act=="login")
{
$sql="select * from `user` where name='$userName' and pwd='$userPw'";
$res=mysql_query($sql);
   $info=mysql_fetch_array($res);
if($info==false){
          echo "<script language='javascript'>alert('�ʺŻ����������');history.back();</script>";
          exit;
       }
	   else
		   {
		   $_SESSION[login]=$userName;
 echo "<script language='javascript'>alert('��¼�ɹ���');location.href='index.php';</script>";
	   }
}
?>