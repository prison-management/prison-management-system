<html>
<head>
<title>Court form</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table border="1" bgcolor="white" align="center" width="54%">
<tr bgcolor="black">
<td align="center">
<font size="5">
<a href="adminpanel.php">HOME</a> 
</font>
</td>
</tr>
<tr>
<td>
	<h2 class="bg-primary" align="center">COURT VERDICTS FORM</h2>
<form action="validatecourt.php" method="post">
<table bgcolor="white" height="431" border="0" align="center" width="50%">
<td width="34%" bgcolor="#FFFFFF"><b>National Id:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Nationalid" size=4 maxlength=7 required placeholder="9999"/></td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><b>File Number:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="Filenum" size=6 maxlength=7 required placeholder="XXX"/></td>
</tr>

	<tr><td><label for="on"><b>Date Of Trial:</b></label>
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
				<option value="09">2021</option>
				<option value="10">2022</option></td>
				
				</select>
			</td>
</tr>
<tr><td bgcolor="#FFFFFF"><b>Sentence:</b></td>
        <td> <select name="sentence">
		 <option>2 Weeks</option>
        <option>1 to 3 Months</option>
		<option>1year</option>
		<option>5 to 1o Years</option>
        <option>15 Above</option>
		<option>Life Sentence</option></td></tr>
		
<tr><td bgcolor="#FFFFFF"><b>Court Location:</b></td>
        <td> <select name="location">
		<option>Thiruvanthapuram Court</option>
		<option>Thrissur Court</option>
        <option>Ernakulam Court</option>
		<option>Aluva Court</option></td></tr>
		

      <td height="26" bgcolor="" align="center"><input type="submit" value="SAVE" /></td>
 </tr>
</table>
</form>
</td>
</tr>
<tr>
<td bgcolor="white" colspan="3" align="left">
&copy; Prison Management System</td>
</tr>
</table>
</body>
</html>