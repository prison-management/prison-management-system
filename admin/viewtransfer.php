<html>
<head>
  <title>View transfer record  </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='black' width='1200' cellpadding='8' cellspacing='0' height='580'>
          <tr>
            <td bgcolor='#999999' align='center'>

<?php

$host="localhost";
$username="root";
$password="";
$db_name="prisonpro";
$tbl_name="transfer";
$con = mysqli_connect('localhost', 'root', '');

mysqli_connect("$host","$username","$password") or die("cannot connect");
mysqli_select_db($con, "$db_name")or die("cannot connect");

$sel= mysqli_query($con, "select * from $tbl_name");
echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='black'>
<caption><h1>PRISONER TRANSFER  INFORMATION</h1></caption>
<tr bgcolor='grey'>
<th width='3%'>National id</th>
<th width='10%'>File Number</th>
<th width='10%'>To Prison</th>
<th width='10%'>Date of Transfer</th>
</tr>";

   while($row=mysqli_fetch_array ($sel))
{
echo "<tr bgcolor='grey'>";

echo  "<td width='3%'>".$row ['National_id']."</td>";
echo  "<td width='10%'>".$row ['File_num']."</td>";
echo  "<td width='10%'>".$row ['To_prison']."</td>";
echo  "<td width='10%'>".$row ['Dateoftransfer']. "</td>";
echo '<td width="3%"><b><a href="deletetransfer.php?id=' . $row['National_id'] . '">Delete</a></font></b></td>';


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
            <td align='center' bgcolor='grey' height='1'>
          </tr>
          <td><h4 style="color: white; align:center">
                 &copy; Prison Management System</h4></td></tr>
            </td>
          </tr>
	</table>
</body>
</head>
</html>