<?php
include("check_login.php");
 include("../conn.php");
function getname($exname){
   $dir = "upimages/";
   $i=1;
   if(!is_dir($dir)){
      mkdir($dir,0777);
   }

   while(true){
       if(!is_file($dir.$i.".".$exname)){
	       $name=$i.".".$exname;
	       break;
	   }
	   $i++;
	 }

   return $dir.$name;
}
 //添加图书
if($action=="add")
{
	if(is_numeric($shichangjia)==false || is_numeric($huiyuanjia)==false)
	{
		echo "<script>alert('价格只能为数字！');history.back();</script>";
		exit;
	}
	if(is_numeric($shuliang)==false)
	{
		echo "<script>alert('数量只能为数字！');history.back();</script>";
		exit;
	}

	$exname=strtolower(substr($_FILES['upfile']['name'],(strrpos($_FILES['upfile']['name'],'.')+1)));
$uploadfile = getname($exname);

move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile);
if(trim($_FILES['upfile']['name']!=""))
 {
  $uploadfile="admin/".$uploadfile;
}
else
 {
  $uploadfile="";
 }

$sql="insert into shu(name,jianjie,addtime,xinghao,tupian,dalei,xiaolei,shichangjia,huiyuanjia,chubanshe,tuijian,shuliang,cishu,tejia)values('$name','$jianjie','NOW()','$xinghao','$uploadfile','$dalei','$xiaolei','$shichangjia','$huiyuanjia','$chubanshe','$tuijian','$shuliang','0','$tejia')";

mysql_query($sql);
echo "<script>alert('图书添加成功!');window.location.href='shu.php';</script>";
 }

 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>添加图书</title>
<link rel="stylesheet" type="text/css" href="skin/css/base.css">
<script language = "JavaScript">
var onecount;
onecount = 0;
subcat = new Array();
<?php
$count=0;
$sql="select * from categories where reid!=0";
$result=mysql_query($sql);
  while($rs=mysql_fetch_array($result))
  {
?>
subcat[<?php echo $count;?>] = new Array("<?php echo $rs['name'];?>","<?php echo $rs['reid'];?>","<?php echo $rs['id'];?>");
<?php
    $count++;
}
?>
onecount=<?php echo $count?>;
function getCity(locationid)
{
    document.form1.xiaolei.length = 0;

    var locationid=locationid;

    var i;
    //document.form1.xiaolei.options[0] = new Option('选择子分类','');
    for (i=0;i < onecount; i++)
    {
        if (subcat[i][1] == locationid)
        {
        document.form1.xiaolei.options[document.form1.xiaolei.length] = new Option(subcat[i][0], subcat[i][2]);
        }
    }

}

</script>
</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="720" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" bgcolor="#E7E7E7"><div align="center" >添加图书</div></td>
  </tr>
  <tr>
    <td height="253" bgcolor="#E7E7E7"><table width="720" border="0" cellpadding="0" cellspacing="1">
	<script language="javascript">
	function chkinput(form)
	{
	  if(form.name.value=="")
	   {
	     alert("请输入图书名称!");
		 form.name.select();
		 return(false);
	   }



	  if(form.huiyuanjia.value=="")
	   {
	     alert("请输入图书会员价!");
		 form.huiyuanjia.select();
		 return(false);
	   }



	  if(form.shichangjia.value=="")
	   {
	     alert("请输入图书市场价!");
		 form.shichangjia.select();
		 return(false);
	   }


	   if(form.chubanshe.value=="")
	   {
	     alert("请输入图书出版社!");
		 form.chubanshe.select();
		 return(false);
	   }

	   if(form.xinghao.value=="")
	   {
	     alert("请输入图书I S B N!");
		 form.xinghao.select();
		 return(false);
	   }
	   if(form.shuliang.value=="")
	   {
	     alert("请输入图书数量!");
		 form.shuliang.select();
		 return(false);
	   }
	   if(form.jianjie.value=="")
	   {
	     alert("请输入图书简介!");
		 form.jianjie.select();
		 return(false);
	   }

	   return(true);
	}
    </script>
     <form name="form1" enctype="multipart/form-data" method="post" action="?action=add" onSubmit="return chkinput(this)">
	  <tr>
        <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">图书名称：</div></td>
        <td width="618" bgcolor="#FFFFFF"><div align="left"><input type="text" name="name" size="25" class="inputcss"></div></td>
      </tr>
  <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">图书图片：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
		<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
        <input type="file" name="upfile" class="inputcss" size="30"></div></td>
      </tr>

      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">图书类型：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
 <?php
    getfenlei(0,'');
	?>
        </div></td>
      </tr>
  <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">价格：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">市场价：<input type="text" name="shichangjia" size="10" class="inputcss" >
          元&nbsp;&nbsp;会员价：
          <input type="text" name="huiyuanjia" size="10" class="inputcss">
          元</div></td>
      </tr>
      <tr>
        <td height="22" bgcolor="#FFFFFF"><div align="center">图书出版社：</div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="left"><select name="chubanshe" id="chubanshe">
  <?php
  $sql="select * from chubanshe order by id DESC";
 $res=mysql_query($sql);
 while($rs=mysql_fetch_array($res))
 {
	 ?>

	  <option value="<?php echo $rs[id]?>" <?php if($rs[id]==$data[chubanshe]) echo "selected"; ?>><?php echo $rs[name]?></option>
	 <?php
	 }
  ?>

  </select></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">图书I S B N：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><input type="text" name="xinghao" class="inputcss" size="20"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">是否推荐：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
          <select name="tuijian" class="inputcss" >
            <option selected value=1>是</option>
            <option value=0>否</option>
          </select>
     </div>
      </td>
      </tr>
	  <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">是否特价：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
          <select name="tejia" class="inputcss" >
            <option selected value=1>是</option>
            <option value=0>否</option>
          </select>
     </div>
      </td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">图书数量：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><input type="text" name="shuliang" class="inputcss" size="10"></div></td>
      </tr>

      <tr>
        <td height="80" bgcolor="#FFFFFF"><div align="center">图书简介：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><textarea name="jianjie" cols="80" rows="8" class="inputcss"></textarea>
        </div></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input name="submit" type="submit" class="buttoncss" id="submit" value="添加">
        &nbsp;&nbsp;<input type="reset" value="重写" class="buttoncss"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
</body>
</html>
