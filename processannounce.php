<?php
//set up for mysql Connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
$con = mysqli_connect('localhost', 'root', '');
//test if the connection is established successfully then it will proceed in next process else it will throw an error message
if(! $conn )
{
  die('Could not connect: ' . mysqli_error($con));
}

//we specify here the Database name we are using
mysqli_select_db($conn, 'prisonpro');
$To=$_POST['To'];
$id=$_POST['id'];
$Subject=$_POST['Subject'];
$Message=$_POST['Message'];
//It wiil insert a row to our leave details`
$sql = "INSERT INTO `prisonpro`.`announce` (`to`,`Id`,`subject`,`message`) 
	     VALUES ('{$To}','{$id}', '{$Subject}', '{$Message}');";
//we are using mysql_query function. it returns a resource on true else False on error
$retval = mysqli_query($conn, $sql);
if(! $retval )
{
  die('Could not enter data: ' . mysqli_error($con));
}
?>
					<script type="text/javascript">
						alert("New Record is Added thank you");
						window.location = "announce.php";
					</script>
					<?php
//close of connection
mysqli_close($conn);
?>