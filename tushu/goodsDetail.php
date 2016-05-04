<?php
require("header.php");
$sql="select * from shu where id=$goodsId";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
?><div class="page_row">
			<!--左边的 -->
			<div class="page_main_msg left">
		        <div class="left_row">
		            <div class="list pic_news">
		  	                <div class="list_bar">&nbsp;图书详情</div>
<form action="cart.php?id=<?php echo $data[id]?>&act=buy" name="f" method="post" onSubmit="return chkinput(this)">
<table width="50%" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF" align="left" style="margin-top:8px">
 <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="left">
		                        <table width="350" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF" align="left" style="margin-top:8px">
					              <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">图书名称：</td>
					                  <td align="left">
					                      <?php echo $data[name]?>
					                  </td>
					              </tr>
								    <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">图书分类：</td>
					                  <td align="left">
<?php echo get_name($data['dalei'],'categories')?>--><?php echo get_name($data['xiaolei'],'categories')?>
					                  </td>
					              </tr> <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">图书出版社：</td>
				                    <td align="left">                          <?php echo
			get_name($data[chubanshe],'chubanshe')?>
</td>
					              </tr>
					              <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">市场价：</td>
					                  <td align="left">
         <?php echo $data[shichangjia]?>元
					                  </td>
					              </tr>
					              <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">会员价：</td>
					                  <td align="left">
                         <?php echo $data[huiyuanjia]?>元
					                  </td>
					              </tr><tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">图书数量：</td>
					                  <td align="left">
             <?php echo $data[shuliang]?>
		                              </td>
					              </tr>



                                     <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">&nbsp;</td>
					                  <td align="left"> <input type="submit" value="放入购物车"  style="border:#ccc 1px solid; background-color:#FFFFFF; font-size:12px; padding-top:3px;" /></td>
					              </tr>
</table>

				            </form>
                            </td>
                            <td align="right" valign="top"><table width="100%" border="0" align="left"> <tr>
                                  <td align="left" valign="top">图书图片</td>
                                </tr>
                                <tr>
                                  <td align="left" valign="top">&nbsp; <img width="300"  src="<?php echo $data[tupian]?>"/></td>
                                </tr>

                </table></td>
					              </tr>
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