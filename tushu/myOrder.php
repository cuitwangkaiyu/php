<?php
require("header.php");
if($_SESSION[login]=="")
  {
    echo "<script>alert('请先登录');history.back();</script>";
	exit;
  }
?><div class="page_row">
			<!--左边的 -->
			<div class="page_main_msg left">
		        <div class="left_row">
		            <div class="list pic_news">
		  	                <div class="list_bar">&nbsp;我的订单</div>
<table width="99%" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF" align="center" style="margin-top:8px">
					              <tr align="center" bgcolor="#FAFAF1" height="22">
					                  <td>订单号</td>
					                  <td>图书总价</td>
					                  <td>下单时间</td>
					                  <td>订单状态</td>
					                  <td>操作</td>
					              </tr><?php

$sql="select * from orders where xiadanren='$_SESSION[login]' order by id DESC";


			$result=mysql_query($sql);
while($data=mysql_fetch_array($result)){
if($data['zt']=='未作任何处理') $a="<a href=?act=del&id=$data[id]>删除</a>";
else
	$a="";

?>
								  <tr align='center' bgcolor="#FFFFFF" height="22">
									  <td><a href="orderDetail.php?orderid=<?php echo $data[orderid]?>"><?php echo $data[orderid]?></a></td>
									  <td>￥<?php echo $data[total]?><br/></td>
									  <td><?php echo $data['time']?></td>
									  <td><?php echo $data['zt']?></td>
									  <td><a href="orderDetail.php?orderid=<?php echo $data[orderid]?>">查看详情</a> <?php echo $a?></td>
								  </tr>
<?php
}
	?>
		        			</table>
							</div>
		         </div>
	        </div>
			<!--左边的 -->	<?php

			require("right.php");
			?>

			<!-- 右边的 -->
		</div>
<?php
require("footer.php");
?>