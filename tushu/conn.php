<?php
error_reporting(E_ALL ^ E_NOTICE);//报错级别设置
    $conn=mysql_connect("localhost","root","") or die("数据库服务器连接错误".mysql_error());
     mysql_select_db("db_tushu",$conn) or die("数据库访问错误".mysql_error());
     mysql_query("set names gbk");
date_default_timezone_set('PRC');

function get_name($id,$table)
{
	$sql="select * from $table where id=$id";
	$r=mysql_query($sql);
	$rows=mysql_fetch_array($r);

	return $rows[name];
}
function getfenlei($id,$reid){

	$sql="select * from categories where reid=0";
	$result=mysql_query($sql);
	echo '<select name="dalei" onchange="getCity(this.value)">';
	$i=1;
while($row=mysql_fetch_array($result))
{
	if($reid==''){
    	if($i==1)$initid=$row['id'];}
	else
		$initid=$id;
	if ($id==$row['id'])
	echo "<option value='".$row['id']."' selected>".$row['name']."</option>";
	else
	echo "<option value='".$row['id']."'>".$row['name']."</option>";
	$i++;
	}

	echo "</select>";
	//读取子分类

	 $sql1="select * from categories where reid='$initid'";
	 	$result1=mysql_query($sql1);

	 echo ' -> <select name="xiaolei">';
while($row1=mysql_fetch_array($result1))
	{
	  if($row1['id']==$reid)
	  echo "<option value='".$row1['id']."' selected>".$row1['name']."</option>";
	  else
	  echo "<option value='".$row1['id']."'>".$row1['name']."</option>";
	 }

 	 echo "</select>";


}
@extract($_POST);
@extract($_GET);
?>
