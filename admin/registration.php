<html>
<head>
<title>registration  form</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table border="1" bgcolor="WHITE" align="center" width="54%">
<tr bgcolor="#FF0000">
<td align="center">
<font size="5">
<a href="adminpanel.php">Home</a> 
</font>
</td>
</tr>
<tr>
<td>

<form action="procereg.php" method="post">
<table bgcolor="white" height="450" border="0" align="center" width="50%">
<tr>
<tr>		
<td width="34%" bgcolor="#FFFFFF"><b>National Id:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Nid"  size=8 maxlength=8 required placeholder="00001111"/>
<span class="required_notification"> Required</span></td>

</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Full Name:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="Fname"  size=20 maxlength=20 required placeholder="JAMES AMULI" />
<span class="required_notification"> Required</span></td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Date of Birth:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="dob" size=12 maxlength=12 required placeholder="YYYY-MM-DD" />
	<span class="required_notification"> Required</span></td>

</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Address:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="address"  size=12 maxlength=12 required placeholder="NGONG" />
<span class="required_notification"> Required</span></td>
</tr>
<tr><td width="34%" bgcolor="#FFFFFF"><b>District:</b></td>
        <td> <select name="county">
		<option>Alappuzha</option>
		<option>Ernakulam</option>
		<option>Idukki</option>
        <option>Kozhikode</option>
		<option>Kannur</option>
		<option>Kasaragod</option>
		<option>Kottayam</option>
		<option>Kollam</option>
		<option>Wayanad</option>
		<option>Pathanamthitta</option>
		<option>Thrissur</option>
		<option>Trivandrum</option>
		<option>Palakkad</option>
		<option>Malappuram</option></td></tr>
		<tr>
 <td><b>Gender</b></td>
        <td><b><input type="radio" name="Gender" value="Male" checked="checked">
        Male <input type="radio" name="Gender" value="Female"></b>
	   <b>Female</b> <br> <input type="radio" name="Gender" value="Transgender">
	   <b>Transgender</b></td>
	      </tr>
		  
 <tr><td bgcolor="#FFFFFF"><b>Education Level:</b></td>
        <td> <select name="education">
		<option>Never</option>
		<option>O level</option>
		<option>Diploma</option>
        <option>Bachelor Degree</option>
		<option>Above</option></td></tr>
		
<tr><td width="44%" bgcolor="#FFFFFF"><b>Marital Status:</b></td>
        <td> <select name="status">
		<option>Divorced</option>
		<option>Married</option>
		<option>Single</option></td></tr>
		
<tr><td bgcolor="#FFFFFF"><b>Offence:</b></td>
        <td> <select name="offence">
        <option>Killing</option>
		<option>Robbery</option>
		<option>Stealing</option>
        <option>Raping</option>
		<option>Other</option></td></tr>
		
		<tr>
<td bgcolor="#FFFFFF"><b>Date Of Imprisonment:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="di"  size=12 maxlength=12 required placeholder="YYYY-MM-DD"/>
	<span class="required_notification"> Required</span></td>


</tr>

<tr>
<td bgcolor="#FFFFFF"><b>File Number:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="Filenum"  size=5 maxlength=5 required placeholder="NB-00099" />
	<span class="required_notification"> Required</span></td>
</tr>

   <td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="SAVE" /></td>
 </tr>
</table>
</form>
</td>
</tr>
<tr>   <?php
           include("footer.php");
                ?>
          </tr>
</tr>
</table>
</body>
</html>