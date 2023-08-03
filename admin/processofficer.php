<?php
//set up for mysql Connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
//test if the connection is established successfully then it will proceed in next process else it will throw an error message
if(! $conn )
{
  die('Could not connect: ' . mysqli_error($dbc));
}

//we specify here the Database name we are using
mysqli_select_db($conn, 'prisonpro');
$Nid=$_POST['Nid'];
$Phone=$_POST['Phone'];
$To=$_POST['To'];
$dot=$_POST['dot'];

//Protecting form submitting an empty data

if (!$Nid | !$Phone | !$To | !$dot )
	{
	echo'<body bgcolor="silver">';
	echo'<center>';
	echo "<h2>Please enter the required details</h2>";
	echo "<br/>";
	echo "<font size='5'>"."Click" . "<a href='officertransfer.php'>"."  ". "here"  . "</a>"  . "  " . "to Officer Transfer"."</font>";
	echo'</center>';
	echo'</body>';
	exit;
	}
//It wiil insert a row to our recruit details`
$sql = "INSERT INTO `prison`.`officer` (`National_id`,`Telephone`,`To_prison`,`Dateoftransfer`) 
	VALUES ('$Nid', '$Phone', '$To', '$dot');";
//we are using mysql_query function. it returns a resource on true else False on error
$retval = mysqli_query($conn, $sql);
if(! $retval )
{
  die('Could not enter data: ' . mysqli_error($dbc));
}
?>
					<script type="text/javascript">
						alert("New Record is Added thank you");
						window.location = "officertransfer.php";
					</script>
					<?php
//close of connection
mysqli_close($conn);
?>