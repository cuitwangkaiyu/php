<?php
include("check_login.php");

$zt=$_POST[yfh];


 if(($yfh==""))
  {
    echo "<script>alert('��ѡ����״̬!');history.back();</script>";
	exit;
  }
 include("../conn.php");

 $sql3=mysql_query("select * from orders where id='".$_GET[id]."'",$conn);
 $data3=mysql_fetch_array($sql3);
 if(trim($data3[zt])=="δ���κδ���")
 {
 $sql=mysql_query("select * from orders where id='".$_GET[id]."'",$conn);
 $data=mysql_fetch_array($sql);
 $array=explode("@",$data[spc]);
 $arraysl=explode("@",$data[slc]);

   for($i=0;$i<count($array);$i++)
    { $id=$array[$i];
     $num=$arraysl[$i];
      mysql_query("update shu set cishu=cishu+'".$num."' ,shuliang=shuliang-'".$num."' where id='".$id."'",$conn);
    }
  }
  mysql_query("update orders set zt='".$zt."'where id='".$_GET[id]."'",$conn);
 header("location:order.php");
?>