<?php include("check_login.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�����û�</title>
<link rel="stylesheet" type="text/css" href="skin/css/base.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<script language="javascript">

 function chkinput(form)
  {


	  if(form.p0.value=="")
	   {
	     alert("�������û�����!");
		 form.p0.select();
		 return(false);

	   }

    if(form.p1.value!="")
	  {
	    if(form.p1.value==""||form.p2.value=="")
		 {
		   alert("���������û������ȷ������!");
		   form.p1.select();
		   return(false);
		 }
	    if(form.p1.value!=form.p2.value)
	   {
	       alert("���û�������ȷ���û����벻ͬ!");
		   form.p1.select();
		   return(false);

	   }
	  }


	  if(form.p1.value!="")
	  {
	    if(form.p1.value.length<5)
		 {
		   alert("������Ӧ����5λ!");
		   form.p1.select();
		   return(false);
		 }

	  }
    return(true);
  }
</script>
<body topmargin="0" leftmargin="0" bottommargin="0">
<div align="center">
  <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
    <form name="form1" method="post" action="admin_edit.php" onSubmit="return chkinput(this)">
	<tr>
      <td height="30" bgcolor="#E7E7E7"><div align="center" >���Ĺ���Ա��Ϣ</div></td>
    </tr>
    <tr>
      <td bgcolor="#E7E7E7"><table width="780" border="0" align="center" cellpadding="0" cellspacing="1">


        <tr>
          <td height="25" bgcolor="#FFFFFF"><div align="center">ԭ����Ա���룺</div></td>
          <td bgcolor="#FFFFFF"><div align="left"><input type="password" name="p0" class="inputcss" size="20"></div></td>
          </tr>
           <tr>
          <td bgcolor="#FFFFFF"><div align="center">�¹���Ա���룺</div></td>
          <td bgcolor="#FFFFFF"><div align="left"><input type="password" name="p1" class="inputcss" size="20"></div></td>
          </tr>
           <tr>
          <td bgcolor="#FFFFFF"><div align="center">ȷ���¹���Ա���룺</div></td>
          <td bgcolor="#FFFFFF"><div align="left"><input type="password" name="p2" class="inputcss" size="20"></div></td>
        </tr>

      </table>
	  </td>
    </tr>
     <tr>
      <td height="20"><div align="center" ><input type="submit" value="����" class="buttoncss">&nbsp;</div></td>
    </tr>
	</form>
  </table>
</div>
</body>
</html>
