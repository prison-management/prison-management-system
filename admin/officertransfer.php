<html>
<head>
<title> Officer Transfer Form</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table width="45%" height="81" border="1" align="center" bgcolor="white">
<tr>
<td height="33" align="center" bgcolor="black">
<font size="5">
<a href="adminpanel.php">Home</a> 
</font>
</td>
</tr>
<td border="0" style="margin-top:0px;" align="center" id="container" height="5" bgcolor="#FFFFFF"><tr>
<td>
<form action="processofficer.php" method="post">
<table bgcolor="white" height="431" border="0" align="center" width="50%">
<td width="34%" bgcolor="#FFFFFF"><b>identification Number:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Nid" required placeholder="9666" /></td>

</tr>
<td width="34%" bgcolor="#FFFFFF"><b>Telephone Number:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Phone" size=12 maxlength=12 required placeholder="9598979266"/></td>
	
</tr>

<tr><td bgcolor="#FFFFFF"><b>To Prison:</b></td>
<td> <select id="district" name="district" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;display:block;">
                            <option selected="selected" value="01">Alapuzha</option>
                            <option value="02">Ernakulam</option>
                             <option value="03">Idukki</option>
                            <option value="04">Kannur</option>
                           <option value="04">Kasaragod</option>
                           <option value="06">Kollam</option>
                           <option value="07">Kozhikode</option>
                           <option value="08">Kollam</option>
                           <option value="09">Malapuram</option>
                            <option value="10">Palakkad</option>
                           <option value="11">Pathanamttitta</option>
                           <option value="12">Thrissure</option>
                           <option value="13">Thrivandrum</option>
                           <option value="14">Wayyanad</option>
                        </td></tr>
                        </select></td></tr>
        
<tr>
<td bgcolor="#FFFFFF"><b>Date of Transfer:</b></td>
<td bgcolor="#FFFFFF"><input type="date" name="dot" size=12 maxlength=12 required placeholder="YYYY-MM-DD" /></td>
</tr>

  <td height="26" bgcolor="white" align="center">
  <input type="submit" value="Add" /></td>
 </tr>
</table>
</form>
</td>
<tr bgcolor="white"></tr>
</table>
</body>
</html>