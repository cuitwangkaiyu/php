<?php
require("header.php");
if($_SESSION[login]=="")
  {
    echo "<script>alert('���ȵ�¼');history.back();</script>";
	exit;
  }
if($act=="save")
{
	if($title=="" || $content=="")
	{
	echo "<script>alert('���Ա���,����,����Ϊ��');history.back();</script>";
	exit;
	}

$sql="insert into liuyan (title,content,userid) values ('$title','$content','$_SESSION[login]')";

$res=mysql_query($sql);
if($res)
	{
	echo "<script>alert('�ɹ�');location.href='guest.php';</script>";
	exit;
	}
	else

	exit("ʧ����");

	}
?><div class="page_row">
			<!--��ߵ� -->
			<div class="page_main_msg left">
		        <div class="left_row">
		            <div class="list pic_news">
		  	                <div class="list_bar">&nbsp;�û�����</div>
<form id="form1" method="post" action="?act=save">
				<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

				  <tr>
				    <td width="34%" align="right">���Ա���</td>
				    <td width="66%" align="left">

				        <label for="title"></label>
				        <input type="text" name="title" id="title" />

			        </td>
			      </tr>
				  <tr>
				    <td align="right">��������</td>
				    <td align="left"><label for="content1"></label>
			        <textarea name="content" id="content1" cols="45" rows="5" ></textarea></td>
			      </tr>
				  <tr>
				    <td colspan="2" align="center"><input type="submit" name="button" id="button" value="�����ύ" /></td>
			      </tr>
		      </table>
			</form><br>
				<table width="100%" border="0" cellpadding="0" cellspacing="0"  style="border-collapse:collapse;">
				  <tr>
				    <td height="30" colspan="2" align="center" >�ҵ������б�</td>
			      </tr>
                  <?php
				  $sql="select * from liuyan where userid='$_SESSION[login]' order by id DESC";
				  $res=mysql_query($sql);
				  while($d=mysql_fetch_array($res))
				  {
				  ?>
				  <tr>
				    <td width="35%" height="30" align="center">���Ա���:</td>
				    <td width="65%" align="left"> <font color="blue" size="4"><?php echo $d[title]?></td>
			      </tr>
				  <tr>
				    <td height="50" align="center">��������:</td>
				    <td height="50" align="left"> <?php echo $d[content]?><br><br>ʱ��:<?php echo $d[addtime]?></td>
			      </tr>
                  <?php
				  if($d[replay]!="")
				  {
				  ?>
				  <tr bgcolor="#FFFFFF">
				    <td align="right">����ظ�:</td>
				    <td align="left"><font color="red" size="3"><br><?php echo $d[replay]?><br><br><?php echo $d[rtime]?></font></td>
			      </tr>
                  <?php
				  }
				  ?>
				  <tr>
				    <td colspan="2" align="right">&nbsp;</td>
			      </tr>
                  <?php
                  }
				  ?>
	          </table>

							</div>
		         </div>
	        </div>
			<!--��ߵ� -->	<?php

			require("right.php");
			?>

			<!-- �ұߵ� -->
		</div>
<?php
require("footer.php");
?>