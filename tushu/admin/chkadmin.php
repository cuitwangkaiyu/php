<?php
session_start();
  include("../conn.php");
  $sql="select * from admin where name='".$userName."'";
     $re=mysql_query($sql);
     $data=mysql_fetch_array($re);
     if($data==false){
          echo "<script language='javascript'>alert('�����ڴ˹���Ա��');history.back();</script>";
          exit;
       }
      else{
          $_SESSION[admin_username]=$userName;
          if($data[pwd]==md5($userPw)){
               header("location:index.php");
           }
          else{
             echo "<script language='javascript'>alert('�����������');history.back();</script>";
             exit;
           }
      }



?>