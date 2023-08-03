<html>
<head>
  <title>Delete comments </title>
  <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='1' bgcolor='black' width='700' cellpadding='8' cellspacing='0' height='200'>
         
         
          <tr>
            <td colspan="3" bgcolor='#999999' valign='center'>

<?php
ob_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link, "prisonpro");
$result=mysqli_query($link, "select * from announce");
?>


<?php
//To delete:
if(isset($_POST["delete"])){
$Id=$_POST["Id"];
$delete=mysqli_query($link, "delete from announce where Id='$_POST[Id]'");
if($delete){
print "<script language=\"javascript\">
	alert(\"Successfully deleted!...\")
	location.href=\"deleteannounce.php\"
	</script>";
}
else{
print "<script language=\"javascript\">
	alert(\"Not deleted!...\")
	location.href=\"deleteannounce.php\"
	</script>";
}
}
?>



<?php

print "<table width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='black'>
<caption><b>DELETE ANNOUNCEMENT DETAILS</b></caption><br>
<tr bgcolor='silver'>
<th>To.</th>
<th>Id.</th>
<th>Subject</th>
<th>Message</th>
</tr>";
$i=1;
while($row=mysqli_fetch_array($result)){
print "<form method=POST>";
print"<tr bgcolor='grey'>

<td>$i<input type=\"hidden\" name=\"Id\" value=\"$row[Id]\"></td>
<td>$row[to]</td>

<td>$row[subject]</td>
<td>$row[message]</td>

<td width='10%' align='center'><input type=submit name=delete value=delete></td>
</tr>";
print "</form>";
$i++;
}
print"</table>";
?>

<br/>

			</td>
          </tr>
          <tr>
		  <td align="center"><a href="adminpanel.php" target="_parent">Panel Admin <b>|</b></a>
			<a href="viewannounce.php" target="_parent">View announce<b>|</b></a></td>
		
          </tr>
          <tr>
            <br>
          <td>
          <h5 style="color: white ;align:center">
          &copy; Prison Mnanagement System</h4></t5>
</tr>	
	</table>
</body>
</head>
</html>


