<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>订单查询</title>
<link rel="stylesheet" type="text/css" href="skin/css/base.css">
</head>
<?php
  include("../conn.php");
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="30" bgcolor="#E7E7E7"><div align="center">订单查询</div></td>
        </tr>
        <tr>
          <td height="50" bgcolor="#555555"><table width="700" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr>
              <td bgcolor="#FFFFFF">
			  <table width="700" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
			   <script language="javascript">
			     function chkinput3(form)
				 {
				   if((form.username.value=="")&&(form.ddh.value==""))
				    {
				      alert("请输入下订单人或订单号");
					  form.username.select();
					  return(false);
				    }
				   return(true);

				 }
			   </script>
                <form name="form3" method="post" action="" onSubmit="return chkinput3( this)">
				<tr>
                  <td height="25"><div align="center">下订单人姓名:<input type="text" name="username" class="inputcss" size="25" >
                    订单号:<input type="text" name="ddh" size="25" class="inputcss" ></div></td>
                </tr>
                <tr>
                  <td height="25">
                    <div align="center">
					    <input type="hidden" value="show_find" name="show_find">
                        <input name="button" type="submit" class="buttoncss" id="button" value="查 找">
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
	      $username=trim($_POST[username]);
		  $ddh=trim($_POST[ddh]);
		  if($username=="")
		   {
		       $sql=mysql_query("select * from orders where orderid='".$ddh."'",$conn);
		   }
		  elseif($ddh=="")
		  {
		      $sql=mysql_query("select * from orders where xiadanren='".$username."'",$conn);
		   }
		  else
		  {
		      $sql=mysql_query("select * from orders where xiadanren='".$username."'and orderid='".$ddh."'",$conn);
		  }
		  $data=mysql_fetch_array($sql);
		  if($data==false)
		   {
		      echo "<div algin='center'>对不起,没有查找到该订单!</div>";
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
              <td width="77" bgcolor="#FFFFFF"><div align="center">收款方式</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">订单状态</div></td>
            </tr>
			<?php

			  do
			  {

			?>
            <tr>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $data[orderid];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $data[xiadanren];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $data[shouhuoren];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $data[total];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $data[zfff];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $data[shff];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $data[zt];?></div></td>
            </tr>
			<?php
			   }while($data=mysql_fetch_array($sql));
			?>
          </table></td>
        </tr>
      </table>
	    <?php
		   }
		  }
		?>

</body>
</html>
