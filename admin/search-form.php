<html>
<head>
  
  <title>PRISONERS SEARCH RECORD</title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table align='center' border='0' bgcolor='black' width='1200' cellpadding='10' cellspacing='0' height='500'>
  	<h1 style="font-size: 60px;background: black;color: grey; padding: 90px;text-align: center">PRISON MANAGEMENT SYSTEM</h1>
          <tr>
            <td colspan="8" bgcolor="black" height="3" align="center">
			
			
		<font size="5">  
		 <a href="../index.php">Logout |</a> 
         <a href="adminpanel.php">Admin Panel</a>
          </font>
            </td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF"><h1> Seacrh Prisoners By ID</h1>
        <form action="search.php" method="get">
           <label>ID:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor="#FFFFFF"></td>

    <tr>
     <td align="center" bgcolor="#FFFFFF"><h1> Seacrh Officer By ID</h1>
        <form action="search1.php" method="get">
           <label> Officer ID:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor="#FFFFFF"></td></td></tr>
<tr>
     
      <td align="center" bgcolor="#FFFFFF"><h1> Seacrh Visitor By ID</h1>
        <form action="search3.php" method="get">
           <label> Visitors ID:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor="#FFFFFF"></td></tr>

    <tr>
     
      <td align="center" bgcolor="#FFFFFF"><h1> Seacrh Transfer By ID</h1>
        <form action="search2.php" method="get">
           <label> Prisoner  Id :
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor="#FFFFFF"></td></tr>

<td><h4 style="color: white">
&copy; Prison Mnanagement System</h4></td>

</table>
</body>
</html>