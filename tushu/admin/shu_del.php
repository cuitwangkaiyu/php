<?php
 include("check_login.php");
 include("../conn.php");
	  //ɾ��ͼ��
      mysql_query("delete from shu where id='".$id."'",$conn);
	  //ɾ������
	  mysql_query("delete from pingjia where spid='".$id."'",$conn);

 header("location:shu.php");
?>