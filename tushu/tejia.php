<?php
require("header.php");

?><div class="page_row">
			<!--左边的 -->
			<div class="page_main_msg left">
		        <div class="left_row">
		            <div class="list pic_news">
		  	                <div class="list_bar">&nbsp;会员中心</div>
<table width="99%" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF" align="center" style="margin-top:8px">
					              <tr align="center" bgcolor="#FAFAF1" height="22">
					                  <td>图书名称</td>
					                  <td>市场价</td>
					                  <td>会员价</td>
					                  <td>图书图片</td>
					                  <td>操作</td>
					              </tr>
<?php

$sql="select * from shu where tejia=1 order by id DESC";


			$result=mysql_query($sql);
while($data=mysql_fetch_array($result)){


?>
								  <tr align='center' bgcolor="#FFFFFF" height="22">
									  <td><a href="goodsDetail.php?goodsId=<?php echo $data[id]?>"><?php echo $data[name]?></a></td>
									  <td>￥<?php echo $data[shichangjia]?><br/></td>
									  <td>￥<?php echo $data[huiyuanjia]?></td>
									  <td><a href="goodsDetail.php?goodsId=<?php echo $data[id]?>"> <img width="60" height="60" src="<?php echo $data[tupian]?>"/> </a></td>
									  <td><a href="cart.php?id=<?php echo $data[id]?>&act=buy"><img alt="" src="./images/icon_buy.gif" border=0/></a></td>
								  </tr>
<?php
}
	?></table>
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