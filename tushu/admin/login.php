
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<head>
	<title>后台管理</title>
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<meta http-equiv="description" content="This is my page">

    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <style type="text/css">
    body
    {
	   margin-left: 0px;
	   background-image: url(../images/bhj.jpg);
    }
    .style2 {color: #990000}
    .input2
    {
 	   font-size: 12px;
	   border: 3px double #A8D0EE;
	   color: #344898;
    }
    .submit1
    {
	   border: 3px double #416C9C;
	   height: 22px;
	   width: 45px;
	   background-color: #F2F2F2;
	   font-size: 12px;
	   padding-top: 1px;
	   background-image: url(bt.gif);
	   cursor: hand;
    }
    .STYLE12 {font-family: Georgia, "Times New Roman", Times, serif}
    .STYLE13 {color: #316BD6; }
    .STYLE15 {color: #fdsere; font-size: 9pt; }
 </style>



</head>
<body>


<body>
	<br>
	<br>
	<br>
	<br>
	<table width="559" height="423" border="0" align="center" cellpadding="0" cellspacing="0"  background="../images/dfff.jpg">
	 <tr>
	    <td><div align="center" style="FONT-WEIGHT: bold; FONT-SIZE: 40pt;color:white">在线图书销售系统</div></td>
	 </tr>
	 <tr>
		<td width="559">
			<form name="ThisForm" method="POST" action="chkadmin.php">
				<table width="410" height="198" border="0" align="right" cellpadding="0" cellspacing="0">
					<tr>
						<td height="10" colspan="2"></td>
					</tr>
			        <tr>
					    <td width="54" height="22" valign="bottom">
						    <span class="STYLE15" >用户名：</span>
						</td>
						<td width="356" valign="bottom">
					        <input name="userName"  type="text" class="input2" onMouseOver="this.style.background='#F0DAF3';" onMouseOut="this.style.background='#FFFFFF'">
						</td>
					</tr>
					<tr>
						<td height="10" colspan="2" valign="bottom"></td>
					</tr>
					<tr>
						<td height="31" colspan="2" valign="top" class="STYLE15">
						     密&nbsp;&nbsp;码：
							<input name="userPw" type="password" size="21" class="input2" align="bottom" onMouseOver="this.style.background='#F0DAF3';" onMouseOut="this.style.background='#FFFFFF'">
						</td>
					</tr>
					<tr>
						<td height="10" colspan="2" valign="bottom"></td>
					</tr>
					<tr>
						<td colspan="2" valign="top">&nbsp; &nbsp; &nbsp; &nbsp;
							<input name="submit" type="submit" class="submit1" value="登录" > &nbsp;
							<input name="Submit2" type="reset" class="submit1" value="重置">
							<img id="indicator" src="./images/loading.gif" style="display:none"/>
						</td>
				    </tr>
                </table>
	        </form>
        </td>
     </tr>
    </table>
</body>
