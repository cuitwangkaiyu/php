<?php
require("header.php");

?><div class="page_row">
			<!--左边的 -->
			<div class="page_main_msg left">
		        <div class="left_row">
		            <div class="list pic_news">
		  	                <div class="list_bar">&nbsp;网站公告</div>
<table width="99%" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF" align="center" style="margin-top:8px">
					              <tr align="center" bgcolor="#FAFAF1" height="22">
					                  <td>公告名称</td>
					                  <td>查看公告</td>

					              </tr>
<?php

$sql="select * from news  order by id DESC";


			$result=mysql_query($sql);
while($data=mysql_fetch_array($result)){


?>
								  <tr align='center' bgcolor="#FFFFFF" height="22">
									  <td><a href="details.php?id=<?php echo $data[id]?>"><?php echo $data[title]?></a></td>
									  <td><a href="details.php?id=<?php echo $data[id]?>">查看详情</a><br/></td>

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