<?php
session_start();
$_SESSION['admin']="";
$_SESSION['username']="";
session_destroy();
header("location:login.php");

?>