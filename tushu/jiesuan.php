<?php
require("header.php");
if($act=="save")
{
$sql=mysql_query("select * from user where name='".$_SESSION[username]."'",$conn);
$info=mysql_fetch_array($sql);
$ordershao=date("YmjHis").$info[id];
$spc=$_SESSION[goodslist];
$slc= $_SESSION[goodsnum];
//�����

  for($i=0;$i<count($pid)-1;$i++){
$sql="update goods set shuliang=shuliang-$num[$i],cishu=cishu+$num[$i] where id=$pid[$i]";
mysql_query($sql);
}
$xiadanren=$_SESSION[username];
 $time=date("Y-m-j H:i:s");
 $zt="δ���κδ���";
 $total=$_SESSION[goodstotal];
$sql="insert into orders(orderid ,spc,slc,shouhuoren,sex,dizhi,youbian,tel,email,shff,zfff,liuyan,time,xiadanren,zt,total) values ('$ordershao','$spc','$slc','$shouhuoren','$sex','$dz','$yb','$tel','$email','$shff','$zfff','$ly','$time','$_SESSION[login]','$zt','$total')";

 $res=mysql_query($sql);
 echo "<script language='javascript'>alert('����ɹ���');location.href='myOrder.php';</script>";
	   }

?> <script language="javascript">
		     function chkinput(form)
			 {
			   if(form.shouhuoren.value=="")
			    {
				  alert("�������ջ�������!");
				  form.shouhuoren.select();
				  return(false);

				}
				if(form.dz.value=="")
			    {
				  alert("�������ջ��˵�ַ!");
				  form.dz.select();
				  return(false);

				}
				if(form.yb.value=="")
			    {
				  alert("�������ջ����ʱ�!");
				  form.yb.select();
				  return(false);

				}
				if(form.tel.value=="")
			    {
				  alert("�������ջ�����ϵ�绰!");
				  form.tel.select();
				  return(false);

				}
				if(form.email.value=="")
			    {
				  alert("�������ջ���E-mail��ַ!");
				  form.email.select();
				  return(false);

				}
				if(form.email.value.indexOf("@")<0)
				 {
				    alert("�ջ���E-mail��ַ��ʽ�������!");
				    form.email.select();
				    return(false);

				 }
				return(true);

			 }

		   </script><div class="page_row">
			<!--��ߵ� -->
			<div class="page_main_msg left">
		        <div class="left_row">
		            <div class="list pic_news">
		  	                <div class="list_bar">&nbsp;�û�����</div><table width="530" height="300" border="0" align="center" cellpadding="0" cellspacing="1">
  <form name="form1" method="post" action="?act=save" onSubmit="return chkinput(this)">
                <tr>
                  <td width="100" height="25" bgcolor="#FFFFFF"><div align="center">�ջ���������</div></td>
                  <td width="183" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="shouhuoren" size="25" class="inputcss" >
                  </div></td>
                  <td width="86" bgcolor="#FFFFFF"><div align="center">�Ա�</div></td>
                  <td width="176" bgcolor="#FFFFFF"><div align="left">
                      <select name="sex">
                        <option selected value="��">��</option>
                        <option value="Ů">Ů</option>
                      </select>
                  </div></td>
                </tr>
                <tr>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">��ϸ��ַ��</div></td>
                  <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                      <input name="dz" type="text" class="inputcss" id="dz"  size="25">
                  </div></td>
                </tr>
                <tr>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">�������룺</div></td>
                  <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="yb" size="25" class="inputcss" >
                  </div></td>
                </tr>
                <tr>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">��ϵ�绰��</div></td>
                  <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="tel" size="25" class="inputcss" >
                  </div></td>
                </tr>
                <tr>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">�������䣺</div></td>
                  <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="email" size="25" class="inputcss" >
                  </div></td>
                </tr>
                <tr>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">�ͻ���ʽ��</div></td>
                  <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                      <select name="shff" id="shff">
                        <option selected value="��ͨƽ��">��ͨƽ��</option>
                        <option value="�ؿ�ר��">�ؿ�ר��</option>
                        <option value="�ͻ�����">�ͻ�����</option>
                        <option value="�����ͻ�">�����ͻ�</option>
                        <option value="E-mail">E-mail</option>
                      </select>
                  </div></td>
                </tr>
                <tr>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">֧����ʽ��</div></td>
                  <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                      <select name="zfff" id="zfff">
                        <option selected value="�������л��">�������л��</option>
                        <option value="��ͨ���л��">��ͨ���л��</option>
                        <option value="�ʾֻ��">�ʾֻ��</option>
                        <option value="����֧��">����֧��</option>
                      </select>
                  </div></td>
                </tr>
                <tr>
                  <td height="100" bgcolor="#FFFFFF"><div align="center">�������ԣ�</div></td>
                  <td height="100" colspan="3" bgcolor="#FFFFFF"><div align="left">
                      <textarea name="ly" cols="60" rows="8" class="inputcss" ></textarea>
                  </div></td>
                </tr>
                <tr>
                  <td height="25" colspan="4" bgcolor="#FFFFFF"><div align="center">
                      <input name="submit2" type="submit" class="buttoncss" value="�ύ����">
                  </div></td>
                </tr>
              </form></table>
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