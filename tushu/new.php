<?php
require("header.php");

?><div class="page_row">
			<!--��ߵ� -->
			<div class="page_main_msg left">
		        <div class="left_row">
		            <div class="list pic_news">
		  	                <div class="list_bar">&nbsp;����ͼ��</div><table width="99%" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF" align="center" style="margin-top:8px">
					              <tr align="center" bgcolor="#FAFAF1" height="22">
					                  <td>ͼ������</td>
					                  <td>�г���</td>
					                  <td>��Ա��</td>
					                  <td>ͼ��ͼƬ</td>
					                  <td>����</td>
					              </tr>
<?php

$sql="select * from shu order by id DESC";


			$result=mysql_query($sql);
while($data=mysql_fetch_array($result)){


?>
								  <tr align='center' bgcolor="#FFFFFF" height="22">
									  <td><a href="goodsDetail.php?goodsId=<?php echo $data[id]?>"><?php echo $data[name]?></a></td>
									  <td>��<?php echo $data[shichangjia]?><br/></td>
									  <td>��<?php echo $data[huiyuanjia]?></td>
									  <td><a href="goodsDetail.php?goodsId=<?php echo $data[id]?>"> <img width="60" height="60" src="<?php echo $data[tupian]?>"/> </a></td>
									  <td><a href="cart.php?id=<?php echo $data[id]?>&act=buy"><img alt="" src="./images/icon_buy.gif" border=0/></a></td>
								  </tr>
<?php
}
	?></table>
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