<?php
require("header.php");
$sql="select * from orders where orderid ='$orderid'";
 $res=mysql_query($sql);
  $info=mysql_fetch_array($res);
  $spc=$info[spc];
  $slc=$info[slc];
  $arraysp=explode("@",$spc);
  $arraysl=explode("@",$slc);

?><div class="page_row">
			<!--��ߵ� -->
			<div class="page_main_msg left">
		        <div class="left_row">
		            <div class="list pic_news">
		  	                <div class="list_bar">&nbsp;�鿴����</div>
<table width="600"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25" ></td>
  </tr>
  <tr>
    <td height="20"><div align="left"><span class="style5">�����ţ�</span><?php echo $orderid;?></div></td>
  </tr>
  <tr>
    <td height="20"><div align="left" class="style5">ͼ���б�(����)��</div></td>
  </tr>
</table>
<table width="500" height="60" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#E7F3FB"><table width="500" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr >
        <td width="153" height="30"><div align="center" class="style1">ͼ������</div></td>
        <td width="80"><div align="center" class="style1">�г���</div></td>
        <td width="80"><div align="center" class="style1">��Ա��</div></td>
        <td width="80"><div align="center" class="style1">����</div></td>
        <td width="101"><div align="center" class="style1">С��</div></td>
      </tr>
	  <?php
	  $total=0;
	  for($i=0;$i<count($arraysp)-1;$i++){
		 if($arraysp[$i]!=""){
	     $sql1=mysql_query("select * from shu where id='".$arraysp[$i]."'");
	     $info1=mysql_fetch_array($sql1);
		 $total=$total+=$arraysl[$i]*$info1[huiyuanjia];
	  ?>
	  <tr bgcolor="#FFFFFF">
        <td height="20"><div align="center"><?php echo $info1[name];?></div></td>
        <td height="20"><div align="center"><?php echo $info1[shichangjia];?></div></td>
        <td height="20"><div align="center"><?php echo $info1[huiyuanjia];?></div></td>
        <td height="20"><div align="center"><?php echo $arraysl[$i];?></div></td>
        <td height="20"><div align="center"><?php echo $arraysl[$i]*$info1[huiyuanjia];?></div></td>
     </tr>
	 <?php
	   }
	   }
	 ?>

      <tr bgcolor="#FFFFFF">
        <td height="20" colspan="5">
          <div align="right"><span class="style5">�ܼƷ���:</span><?php echo $info[total];?>
          </div></td>
        </tr>
    </table></td>
  </tr>
</table>
<table width="460" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="81" height="20"><div align="left" class="style6">�µ��ˣ�</div></td>
    <td colspan="3"><div align="left"><?php echo $_SESSION[username];?></div></td>
  </tr>
  <tr>
    <td height="20"><div align="left" class="style6">�ջ��ˣ�</div></td>
    <td height="20" colspan="3"><div align="left"><?php echo $info[shouhuoren];?></div></td>
  </tr>
  <tr>
    <td height="20"><div align="left" class="style6">�ջ��˵�ַ��</div></td>
    <td height="20" colspan="3"><div align="left"><?php echo $info[dizhi];?></div></td>
  </tr>
  <tr>
    <td height="20"><div align="left" class="style6">��&nbsp;&nbsp;�ࣺ</div></td>
    <td width="145" height="20"><div align="left"><?php echo $info[youbian];?></div></td>
    <td width="66"><div align="left" class="style6">��&nbsp;&nbsp;����</div></td>
    <td width="158"><div align="left"><?php echo $info[tel];?></div></td>
  </tr>
  <tr>
    <td height="20"><div align="left" class="style6">E-mail:</div></td>
    <td height="20"><div align="left"><?php echo $info[email];?></div></td>
    <td height="20">&nbsp;</td>
    <td height="20">&nbsp;</td>
  </tr>
  <tr>
    <td height="20"><div align="left" class="style6">�ͻ���ʽ��</div></td>
    <td height="20"><div align="left"><?php echo $info[shff];?></div></td>
    <td height="20"><div align="left" class="style6">֧����ʽ��</div></td>
    <td height="20"><div align="left"><?php echo $info[zfff];?></div></td>
  </tr>

  <tr>
    <td height="20">&nbsp;</td>
    <td height="20"></td>
    <td height="20"><div align="center" class="style6">����ʱ�䣺</div></td>
    <td height="20"><div align="left"><?php echo $info[time];?></div></td>
  </tr>
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