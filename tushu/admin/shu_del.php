<?php
 include("check_login.php");
 include("../conn.php");
	  //É¾³ýÍ¼Êé
      mysql_query("delete from shu where id='".$id."'",$conn);
	  //É¾³ýÆÀ¼Û
	  mysql_query("delete from pingjia where spid='".$id."'",$conn);

 header("location:shu.php");
?>