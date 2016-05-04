<?php
require "../conn.php";
if ( $id == "" ) exit( "i非法操作");

$sql = "select * from categories where id=$id";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
if ( $row['reid'] == 0 )
		{

				$sql= "select * from categories where reid=$row[id]";
				$result=mysql_query($sql);
				if ( 1 <= mysql_num_rows($result))
				{
						echo "<script language='javascript'>alert('你要删除的顶级分类下有子分类,请先删除其子分类!');history.go(-1);</script>";
				}
				else
				{
						$sql="delete from categories where id='".$id."'";
$result=mysql_query($sql);
echo "<script>alert('成功删除图书分类');location.href='class.php'</script>";

		exit();				}

		}
		else
		{

			$sql= "delete from categories where id='".$id."'";
$result=mysql_query($sql);
				echo "<script>alert('成功删除图书分类');location.href='class.php'</script>";

		exit();
		}
?>