<?php
require("header.php");

						$sql="select * from news where id=$id";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);

						?>
<div class="page_row">
			<!--��ߵ� -->
			<div class="page_main_msg left">
		        <div class="left_row">
		            <div class="list pic_news">
		  	                <div class="list_bar">&nbsp;�鿴����
		  	                  <table width="100%" border="0"> <tr>
		  	                      <td height="20" align="center">&nbsp;</td>
	  	                        </tr>
		  	                    <tr>
		  	                      <td align="center">&nbsp;<font size="+1" color="#000000"><?php echo $data[title]?></font></td>
	  	                        </tr>
		  	                    <tr>
		  	                      <td height="20" align="center">&nbsp;</td>
	  	                        </tr>
		  	                    <tr>
		  	                      <td>&nbsp;<?php echo $data[content]?></td>
	  	                        </tr>
	  	                      </table>
		  	                </div>

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