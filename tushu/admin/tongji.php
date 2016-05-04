<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>订单查询</title>
<link rel="stylesheet" type="text/css" href="skin/css/base.css">
<script language=JavaScript src="./js/date.js"></script>

</head>
<?php
  include("../conn.php");
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="30" bgcolor="#E7E7E7"><div align="center">销售统计</div></td>
        </tr>
        <tr>
          <td height="50" bgcolor="#555555"><table width="700" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr>
              <td bgcolor="#FFFFFF">
			  <table width="700" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
			   <script language="javascript">
			     function chkinput3(form)
				 {
				   if((form.s.value=="")&&(form.e.value==""))
				    {
				      alert("请选择开始和结束时间");
					  form.s.select();
					  return(false);
				    }
				   return(true);

				 }
			   </script>
                <form name="form3" method="post" action="" onSubmit="return chkinput3( this)">
				<tr>
                  <td height="25"><div align="center">开始时间:<input name="s" onFocus="show_cele_date(s,'','',s)" type="text"  size="10"  value='2012-1-1'>
                     结束时间:<input name="e" onFocus="show_cele_date(e,'','',e)" type="text"  size="10"  value='2012-4-31' class="inputcss">  <input type="hidden" value="show_find" name="show_find">
                        <input name="button" type="submit" class="buttoncss" id="button" value="查看销售统计"></div></td>
                </tr>
                <tr>
                  <td height="25">
                    <div align="center">

                    </div></td>
                </tr>
			    </form>
              </table></td>
            </tr>
          </table></td>
        </tr>
</table>
      <table width="700" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
	  <?php
	    if($_POST[show_find]!="")
		 {
$total=0;
$sql="select * from orders where  `time`>='$s' and `time`<='$e' and zt='已发货'";
//echo $sql;
$res=mysql_query($sql);
		  $data=mysql_fetch_array($res);
		  if($data==false)
		   {
		      echo "<div algin='center'>对不起,没有你需要的信息!</div>";
		   }
		   else
		   {

	  ?>
	  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="30" bgcolor="#E7E7E7"><div align="center" >查询结果</div></td>
        </tr>
        <tr>
          <td height="50" bgcolor="#555555"><table width="700" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr>
              <td width="77" height="25" bgcolor="#FFFFFF"><div align="center">订单号</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">下单用户</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">订货人</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">金额总计</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">付款方式</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">时间</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">订单状态</div></td>
            </tr>
			<?php

do
	{
 $total+=$data[total];
			?>
            <tr>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $data[orderid];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $data[xiadanren];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $data[shouhuoren];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $data[total];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $data[zfff];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $data['time'];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $data[zt];?></div></td>
            </tr>
			<?php
			   }			while($data=mysql_fetch_array($res));
			?>
          </table>
		  <table width="700" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $s?>-<?php echo $e?>总计收入:<?php echo $total?>元</div></td></tr></table>
		  </td>
        </tr>
      </table>
	    <?php
		   }
		  }
		?>

</body>
</html>
