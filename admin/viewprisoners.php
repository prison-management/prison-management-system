<html>
<head>
  <title>PRISONER DETAILS  </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='black' width='1000' cellpadding='8' cellspacing='0' height='590'>
          <tr>
            <td bgcolor='#999999' align='center'>

<?php

$host="localhost";
$username="root";
$password="";
$db_name="prisonpro";
$tbl_name="registration";
$con=mysqli_connect('localhost','root','');

mysqli_connect("$host","$username","$password") or die("cannot connect");
mysqli_select_db($con, "$db_name")or die("cannot connect");

$sel= mysqli_query($con, "select * from $tbl_name");
echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='black'>
<caption><h1>PRISONER INFORMATION</h1></caption>
<tr bgcolor='grey'>
<th width='3%'>National id</th>
<th width='10%'>Full Name</th>
<th width='10%'>Date of Birth</th>
<th width='10%'>Date In</th>
<th width='10%'>Date Out</th>
<th width='15%'>Address</th>
<th width='10%'>County</th>
<th width='10%'>Gender</th>
<th width='3%'>Education</th>
<th width='10%'>Status</th>
<th width='15%'>Offence</th>

<th width='10%'>File Number</th>
</tr>";

   while($row=mysqli_fetch_array ($sel))
{
echo "<tr bgcolor='grey'>";

echo  "<td width='3%'>".$row ['id']."</td>";
echo  "<td width='7%'>".$row ['Full_Name']."</td>";
echo  "<td width='5%'>".$row ['DOB']."</td>";
echo  "<td width='5%'>".$row ['datein']."</td>";
echo  "<td width='5%'>".$row ['dateout']."</td>";
echo  "<td width='7%'>".$row ['Address']. "</td>";
echo  "<td width='5%'>".$row ['County']."</td>";
echo  "<td width='3%'>" .$row ['Gender']."</td>";
echo  "<td width='7%'>".$row ['Education']."</td>";
echo  "<td width='10%'>".$row ['Marital']."</td>";
echo  "<td width='10%'>".$row ['Offence']. "</td>";

echo  "<td width='10%'>".$row ['File_num']."</td>";
echo '<td width="3%"><b><a href="deleteprisoners.php?id=' . $row['id'] . '">Delete</a></font></b></td>';


echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center"><a href="adminpanel.php" target="_parent">| Panel Admin <b>|</b></a></td>
		
          </tr>
          <tr>
            <td align='center' bgcolor='white' height='1'>
            <tr><td><h4 style="color: white">
                &copy; Prison Mnanagement System</h4></td><tr>
            </td>
          </tr>
	</table>
</body>
</head>
</html>