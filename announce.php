<html>
<head>
<title>COMPLAIN FORM</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table width="1260" height="580"  bgcolor="white">

<tr>
     <td colspan="5" bgcolor="#yellow" height="3" align="center">
          <h1 style="color:white; font: size 25px;">COMPLAIN FORM</h1>
		      <h1 class="bg-primary"><font size="5">
	           <a href="index.php">Home |</a> 	 
		        <a href="login2.php">LoginAccess |</a> 
		        <a href="aboutus.php">About Us</a>
		        
		        </font></h1>
            </td>
        </tr>
<td>
<form action="processannounce.php" method="post">
<table bgcolor="white" height="190" border="0" align="center" width="52%">
<td width="27%" height="46" bgcolor="#FFFFFF"><b>To:</b></td>
<td width="73%" bgcolor="#FFFFFF"><input type="text " name="To" /></td>
</tr>
<tr>
<td height="51" bgcolor="#FFFFFF"><b>Id:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="id" ></td>
</tr>
<tr>
<td height="51" bgcolor="#FFFFFF"><b>Subject:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="Subject" ></td>
</tr>
<td height="3"></tr>
<tr>
    <td ><strong><b>Message</b></strong></td>
     <td bgcolor="#FFFFFF"><font size="4">
     <textarea cols="17" rows="4" name="Message"></textarea>
	 </tr>
     <td height="36" bgcolor="#FFFFFF" align="center"><input type="submit" value="Save" /></td>
	  <td height="26" bgcolor="#FFFFFF" align="center"><input type="reset" value="Cancel" /></td>
 </tr>
</table>
</form>
</td>
<tr width="1%" bgcolor="#FFFFFF"></tr>
  <td bgcolor="white" colspan="0" border ="0" align="center"><br>
   &copy; Prison Management System</td>
</table>
</body>
</html>