<?php
require("header.php");
if($act=="save")
{$dongjie=0;
$sql="select * from `user` where name='$usernc'";
$res=mysql_query($sql);
if(!mysql_num_rows($res))
	{
	$sql="insert into `user` (name,pwd,dongjie,email,sfzh,tel,qq,dizhi,youbian,truename) values ('$usernc','$p1','$dongjie','$email','$sfzh','$tel','$qq','$dizhi','$youbian','$truename')";
$res=mysql_query($sql);
	if($res)
	{
	echo "<script>alert('ע��ɹ�');location.href='index.php';</script>";
	exit;
	}
	else
	{
	exit("ʧ����");
	}
	}

else
{
	echo "<SCRIPT LANGUAGE='JavaScript'>alert('ʧ��,�ʺ��Ѵ���');history.back();</SCRIPT>";
	exit;
}
}
?><script language="javascript">
  function chkinput(form)
  {
    if(form.usernc.value=="")
	{
	 alert("�������ʺ�!");
	 form.usernc.select();
	 return(false);
	}
	if(form.p1.value=="")
	{
	 alert("������ע������!");
	 form.p1.select();
	 return(false);
	}
    if(form.p2.value=="")
	{
	 alert("������ȷ������!");
	 form.p2.select();
	 return(false);
	 }
	if(form.p1.value.length<6)
	 {
	 alert("ע�����볤��Ӧ����6!");
	 form.p1.select();
	 return(false);
	 }
	if(form.p1.value!=form.p2.value)
	 {
	 alert("�������ظ����벻ͬ!");
	 form.p1.select();
	 return(false);
	 }
   if(form.email.value=="")
	{
	 alert("��������������ַ!");
	 form.email.select();
	 return(false);
	 }
	if(form.email.value.indexOf('@')<0)
	{
	 alert("��������ȷ�ĵ��������ַ!");
	 form.email.select();
	 return(false);
	 }
   if(form.tel.value=="")
	{
	 alert("��������ϵ�绰!");
	 form.tel.select();
	 return(false);
	 }
  if(form.truename.value=="")
	{
	 alert("��������ʵ����!");
	 form.truename.select();
	 return(false);
	 }
  if(form.sfzh.value=="")
	{
	 alert("���������֤��!");
	 form.sfzh.select();
	 return(false);
	 }

   return(true);
  }
</script>
<div class="page_row">
			<!--��ߵ� -->
			<div class="page_main_msg left">
		        <div class="left_row">
		            <div class="list pic_news">
		  	                <div class="list_bar">&nbsp;�û�ע��</div>

<form action="?act=save" name="f" method="post" onSubmit="return chkinput(this)">
		                        <table width="99%" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF" align="center" style="margin-top:8px">
					              <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">�û��ʺţ�</td>
					                  <td align="left">
					                      <input type="text" name="usernc" size="25" class="inputcss" >
					                  </td>
					              </tr>
					              <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">���룺</td>
					                  <td align="left">
                          <input type="password" name="p1" size="25" class="inputcss" >
					                  </td>
					              </tr>
					              <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">ȷ�����룺</td>
					                  <td align="left">
                          <input type="password" name="p2" size="25" class="inputcss" >
					                  </td>
					              </tr><tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">��ʵ������</td>
					                  <td align="left">
                          <input type="text" name="truename" size="25" class="inputcss" >

		                              </td>
					              </tr>
					              <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">���䣺</td>
					                  <td align="left">
                          <input type="text" name="email" size="25" class="inputcss" >
					                  </td>
					              </tr>
					              <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">��ϵqq��</td>
				                    <td align="left">                          <input type="text" name="qq" size="25" class="inputcss" >
</td>
					              </tr>
					              <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">�������룺</td>
					                  <td align="left">
	 <input type="text" name="youbian" size="25" class="inputcss" >

		                              </td>
					              </tr>

								    <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">��ϵ�绰��</td>
					                  <td align="left">
                          <input type="text" name="tel" size="25" class="inputcss" >

		                              </td>
					              </tr>

								    <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">���֤�ţ�</td>
					                  <td align="left">
                          <input type="text" name="sfzh" size="25" class="inputcss" >

		                              </td>
					              </tr>
								     <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">�ʼĵ�ַ��</td>
					                  <td align="left">
                          <input type="text" name="dizhi" size="25" class="inputcss" >

		                              </td>
					              </tr>
                                     <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">&nbsp;</td>
					                  <td align="left"> <input type="submit" value="ע �� �� ��"  style="border:#ccc 1px solid; background-color:#FFFFFF; font-size:12px; padding-top:3px;" /></td>
					              </tr>
		        				</table>

				            </form>
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