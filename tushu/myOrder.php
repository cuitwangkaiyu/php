<?php
require("header.php");
if($_SESSION[login]=="")
  {
    echo "<script>alert('���ȵ�¼');history.back();</script>";
	exit;
  }
?><div class="page_row">
			<!--��ߵ� -->
			<div class="page_main_msg left">
		        <div class="left_row">
		            <div class="list pic_news">
		  	                <div class="list_bar">&nbsp;�ҵĶ���</div>
<table width="99%" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF" align="center" style="margin-top:8px">
					              <tr align="center" bgcolor="#FAFAF1" height="22">
					                  <td>������</td>
					                  <td>ͼ���ܼ�</td>
					                  <td>�µ�ʱ��</td>
					                  <td>����״̬</td>
					                  <td>����</td>
					              </tr><?php

$sql="select * from orders where xiadanren='$_SESSION[login]' order by id DESC";


			$result=mysql_query($sql);
while($data=mysql_fetch_array($result)){
if($data['zt']=='δ���κδ���') $a="<a href=?act=del&id=$data[id]>ɾ��</a>";
else
	$a="";

?>
								  <tr align='center' bgcolor="#FFFFFF" height="22">
									  <td><a href="orderDetail.php?orderid=<?php echo $data[orderid]?>"><?php echo $data[orderid]?></a></td>
									  <td>��<?php echo $data[total]?><br/></td>
									  <td><?php echo $data['time']?></td>
									  <td><?php echo $data['zt']?></td>
									  <td><a href="orderDetail.php?orderid=<?php echo $data[orderid]?>">�鿴����</a> <?php echo $a?></td>
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