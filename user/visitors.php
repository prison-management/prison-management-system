<html>
<head>
   <head>
  
    <link href="style1.css" rel="stylesheet" type="text/css"/>
    <script src="jquery-1.7.1.min.js"></script>
    <script src="registration_script.js"></script>
	  <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body> 

<table align="center" border="0" bgcolor="white" width="400" cellpadding="9" cellspacing="0" height="525">
          <tr>
          <h2 style="font-size:60px ;background:white; padding: 60px;"> Visitor Registration Form</h2>
          </tr>  
          <tr>
            <a href="userpanel.php" style="font-size:30px;color:black">|HOME|</a> <br>
          </tr></br>
          <tr>
            <td width="50%" align="center" bgcolor="white">      
<div id="content" class="ctrdiv">
	<form id="frmReg" method="POST" action="validatevisitor.php">
            <div class="control_input">
            <label for="id" class="label">Visitor Id</label><input type="text" id="id" name="id" size=14  maxlength=8 
                class="reg_fields" required placeholder="XXXX"  />
            </div>
            <div class="control_input">
                <label for="fullname" class="label">Full Name</label><input type="text" id="fullname" name="fullname" class="reg_fields" required placeholder="John Joy"/>
            </div>
            <div class="control_input">
                <label for="address" class="label">Address</label><input type="text" id="address" name="address" class="reg_fields" required placeholder="enter address"/>
            </div>
           
             
            <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="dateofvisit" class="label">Date</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="lMonth" name="lMonth" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; display:block;">
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
                        </select>
                    </td>
                    <td>
                        <input type="text" id="txtDay" name="txtDay" style="width: 40px;" required placeholder="DD" class="reg_fields"/>
                        <input type="text" id="txtYear" name="txtYear" style="width: 60px;" required placeholder="YYYY" class="reg_fields"/>
                    </td>
                    </tr></table>
                </div>
            </div>

            <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="timein" class="label">Time In</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="timein" name="timein" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;display:block;">
                           <option>12:00am</option>
                           <option>12:30am</option>
                           <option>1:00pm</option>
                           <option>1:30pm</option>
                          <option>2:00pm</option>
                           <option>2:30pm</option>
                           <option>3:00pm</option>
                           <option>3:30pm</option>
                           <option>4:00pm</option>
                           <option>4:30pm</option>
                           <option>5:00pm</option>
                           
                        </select>
                    </td>
                </table>
                </div class="control_input">

              <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="timeout" class="label">Time Out</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="timeout" name="timeout" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;display:block;">
                           <option>12:00am</option>
                           <option>12:30am</option>
                           <option>1:00pm</option>
                           <option>1:30pm</option>
                           
                            <option>2:00pm</option>
                           <option>2:30pm</option>
                           <option>3:00pm</option>
                           <option>3:30pm</option>
                           <option>4:00pm</option>
                           <option>4:30pm</option>
                           <option>5:00pm</option>
                           
                        </select>
                    </td>
                </table>
                </div class="control_input">

            <div class="control_input">
                <label for="telephone" class="label">Telephone No.</label><input type="text" id="telephone" name="telephone"  size=11  maxlength=11 
                class="reg_fields" required placeholder="9895602121" class="reg_fields"/>
            </div class="control_input">

        

            <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="relationship" class="label">relationship</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="relationship" name="relationship" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;display:block;">
                            <option>Parent</option>
                           <option>Friend</option>
                           <option>Wife</option>
                           <option>Husband</option>
                           <option>Daughter/Son</option>
                           <option>Relative</option>
                           <option>Sibling</option>
                          <option>other</option>
                        </select>
                    </td>
                </table>
                </div class="control_input">

                <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="prisoner" class="label">Prisoner Name</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                    <select id="prisoner" name="prisoner" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;display:block;">
                     <option value="">--Select prisoner name--</option>
                   <?php
                  $con =  mysqli_connect('localhost', 'root', '');
                   mysqli_select_db($con, 'prisonpro');
                   $msql = mysqli_query($con, "SELECT * FROM registration");
                    while($m_row = mysqli_fetch_array($msql))        
                    echo("<option value = '" . $m_row['Full_Name'] . "'>" . $m_row['Full_Name'] . "</option>");
                    ?>
                     </select></td>
                 </table>
                  </div class="control_input">
                 
           

            <div class="control_input">
                <input type="submit" name="signup" id="signup" value="Submit" title="" border="0">
             </div class="control_input">
            
            <div id="validation_msg">
            </div>
    </form>
</td>
</tr>
<tr>
     <td><h4 style="color: black">
     &copy; Prison Management System</h4></td>
</tr>
</table>
</body>
</html>