<html>
<head>
  <title>Delete prisoners</title>
  <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='1' bgcolor='black' width='800' cellpadding='8' cellspacing='0' height='200'>
        
          <tr>
            <td colspan="3" bgcolor='grey' valign='center'>

<?php
ob_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link, "prisonpro");
$result=mysqli_query($link, "select * from transfer");
?>



<?php
//To delete:
if(isset($_POST["delete"])){
$id=$_POST["National_id"];

$delete=mysqli_query($link, "delete from transfer where National_id='$_POST[National_id]'");
if($delete){
print "<script language=\"javascript\">
	alert(\"Successfully deleted!...\")
	location.href=\"deletetransfer.php\"
	</script>";
}
else{
print "<script language=\"javascript\">
	alert(\"Not deleted!...\")
	location.href=\"deletetransfer.php\"
	</script>";
}
}
?>



<?php

print "<table width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='black'>
<caption><b>DELETE TRANSFER </b></caption>
<tr bgcolor='grey'>

<th width='3%'>National id</th>
<th width='10%'>File Number</th>
<th width='10%'>To Prison</th>
<th width='10%'>Date of Transfer</th>


</tr>";
$i=1;
while($row=mysqli_fetch_array($result)){
print "<form method=POST>";
print"<tr bgcolor='white'>
<td>$i<input type=\"hidden\" name=\"National_id\" value=\"$row[National_id]\"></td>
<td>$row[File_num]</td>
<td>$row[To_prison]</td>
<td>$row[Dateoftransfer]</td>

<td align='center'><input type=submit name=delete value=delete></td>
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
			<a href="viewtransfer.php" target="_parent">View Transfer<b>|</b></a>
			<a href="index.php" target="_parent">Log out</a></td>
		
          </tr>
          <tr>
            <td align='center' bgcolor='white' height='1'>
            <tr><td><h4 style="color: white">
                &copy; Prison Management System</h4></td><tr>
            </td>
          </tr>
	</table>
</body>
</head>
</html>

