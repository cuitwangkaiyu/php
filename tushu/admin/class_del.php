<?php
require "../conn.php";
if ( $id == "" ) exit( "i�Ƿ�����");

$sql = "select * from categories where id=$id";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
if ( $row['reid'] == 0 )
		{

				$sql= "select * from categories where reid=$row[id]";
				$result=mysql_query($sql);
				if ( 1 <= mysql_num_rows($result))
				{
						echo "<script language='javascript'>alert('��Ҫɾ���Ķ������������ӷ���,����ɾ�����ӷ���!');history.go(-1);</script>";
				}
				else
				{
						$sql="delete from categories where id='".$id."'";
$result=mysql_query($sql);
echo "<script>alert('�ɹ�ɾ��ͼ�����');location.href='class.php'</script>";

		exit();				}

		}
		else
		{

			$sql= "delete from categories where id='".$id."'";
$result=mysql_query($sql);
				echo "<script>alert('�ɹ�ɾ��ͼ�����');location.href='class.php'</script>";

		exit();
		}
?>