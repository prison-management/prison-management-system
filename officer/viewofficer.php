
<html>
<head>
  <title>View Officer </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='grey' width='1300' cellpadding='8' cellspacing='0' height='200'>

          <tr>
            <td bgcolor='#999999' align='center'>
          
<?php

$host="localhost";
$username="root";
$password="";
$db_name="prisonpro";
$tbl_name="officerdetails";

$con = mysqli_connect("$host","$username","$password") or die("cannot connect");
mysqli_select_db($con, "$db_name")or die("cannot connect");

$sel= mysqli_query($con, "select * from $tbl_name ORDER BY id DESC LIMIT 0,7");
echo"<table align='center' width='100%' bgcolor='black' border='0' bgcolor='green' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h1>OFFICER INFORMATION</h1></caption>
<tr bgcolor='#CCCCCC'>
<th width='3%'>National id</th>
<th width='10%'>Full Name</th>
<th width='15%'>Address</th>
<th width='10%'>Date of birth</th>
<th width='10%'>Gender</th>
<th width='10%'>Telephone</th>
<th width='10%'>Education</th>
<th width='10%'>Experiance</th>
</tr>";

while($row=mysqli_fetch_array ($sel))
{
echo "<tr bgcolor='grey'>";

echo  "<td width='3%'>".$row ['id']."</td>";
echo  "<td width='7%'>".$row ['fullname']."</td>";
echo  "<td width='10%'>".$row ['address']."</td>";
echo  "<td width='10%'>".$row ['dateofbirth']. "</td>";
echo  "<td width='10%'>".$row ['gender']. "</td>";
echo  "<td width='3%'>" .$row ['telephone']."</td>";
echo  "<td width='10%'>".$row ['education']."</td>";
echo  "<td width='10%'>".$row ['experience']."</td>";




echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center" bgcolor='black'><a href="officerpanel.php" target="_parent">Officer Admin </a></td>
		
          </tr>
          <tr>
          <td><h4 style="color: white">
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

          &copy; Prison Mnanagement System</h4></td>
            </td>
          </tr>
	</table>
</body>
</head>
</html>