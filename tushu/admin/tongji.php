<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>������ѯ</title>
<link rel="stylesheet" type="text/css" href="skin/css/base.css">
<script language=JavaScript src="./js/date.js"></script>

</head>
<?php
  include("../conn.php");
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="30" bgcolor="#E7E7E7"><div align="center">����ͳ��</div></td>
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
				      alert("��ѡ��ʼ�ͽ���ʱ��");
					  form.s.select();
					  return(false);
				    }
				   return(true);

				 }
			   </script>
                <form name="form3" method="post" action="" onSubmit="return chkinput3( this)">
				<tr>
                  <td height="25"><div align="center">��ʼʱ��:<input name="s" onFocus="show_cele_date(s,'','',s)" type="text"  size="10"  value='2012-1-1'>
                     ����ʱ��:<input name="e" onFocus="show_cele_date(e,'','',e)" type="text"  size="10"  value='2012-4-31' class="inputcss">  <input type="hidden" value="show_find" name="show_find">
                        <input name="button" type="submit" class="buttoncss" id="button" value="�鿴����ͳ��"></div></td>
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
$sql="select * from orders where  `time`>='$s' and `time`<='$e' and zt='�ѷ���'";
//echo $sql;
$res=mysql_query($sql);
		  $data=mysql_fetch_array($res);
		  if($data==false)
		   {
		      echo "<div algin='center'>�Բ���,û������Ҫ����Ϣ!</div>";
		   }
		   else
		   {

	  ?>
	  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="30" bgcolor="#E7E7E7"><div align="center" >��ѯ���</div></td>
        </tr>
        <tr>
          <td height="50" bgcolor="#555555"><table width="700" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr>
              <td width="77" height="25" bgcolor="#FFFFFF"><div align="center">������</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">�µ��û�</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">������</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">����ܼ�</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">���ʽ</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">ʱ��</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">����״̬</div></td>
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
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $s?>-<?php echo $e?>�ܼ�����:<?php echo $total?>Ԫ</div></td></tr></table>
		  </td>
        </tr>
      </table>
	    <?php
		   }
		  }
		?>

</body>
</html>
