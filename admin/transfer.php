<html>
<head>
<title> Transfer Form</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table width="60%" height="91" border="1" align="center" bgcolor="#FFFFFF">
<tr>
<td height="33" align="center" bgcolor="black">
<font size="5">
<a href="adminpanel.php">HOME</a> 
 
</font>
</td>
</tr>
<td height="5" bgcolor="#FFFFFF"><tr>
<td>
	<h2 class="bg-primary" align="center">TRANSFER FORM FOR PRISONNER</h2>
<form action="validatetransfer.php" method="post">
<table bgcolor="white" height="431" border="0" align="center" width="50%">
<td width="34%" bgcolor="#FFFFFF"><b>National Id:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" size=7  maxlength=5 name="Nid" required placeholder="0000" /></td>
</tr>
<td width="34%" bgcolor="#FFFFFF"><b>File Number:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" size=7 maxlength=8  name="Filenum" required placeholder="XXX" /></td>
</tr>


	<tr><td bgcolor="#FFFFFF"><b>To Prison:</b></td>
        <td><input type="text" name="To" size=15 maxlength=20 /></td>
            </tr>

			<tr><td><label for="on"><b>Date of Transfer:</b></label>
		      	<td><select name="month" required>
				<option selected="selected" value="01">January</option>
				<option value="02">February</option>
				<option value="03">March</option>
				<option value="04">April</option>
				<option value="05">May</option>
				<option value="06">June</option>
				<option value="07">July</option>
				<option value="08">August</option>
				<option value="09">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
				</select></td>
				<td>
				<input type="text" name="day" size=4 maxlength=2 required placeholder="DD"/></td>
				
		      	<td><select name="year" required>
				<option selected="selected" value="01">2014</option>
				<option value="02">2015</option>
				<option value="03">2016</option>
				<option value="04">2017</option>
				<option value="05">2018</option>
				<option value="06">2019</option>
				<option value="07">2020</option>
				<option value="08">2021</option>
				<option value="09">2022</option></td>
				</select>
			</td>
</tr>

  <td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="Add" /></td>
 </tr>
</table>
</form>
</td>
<td bgcolor="#FFFFFF"></tr>
<tr>
<td>
          <h4 style="color: black">
          &copy; Prison Management System</h4></td>

</tr>
</table>
</body>
</html>