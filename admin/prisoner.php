<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style1.css" rel="stylesheet" type="text/css"/>
    <script src="jquery-1.7.1.min.js"></script>
    <script src="registration_script.js"></script>
	<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table align="center" border="0" bgcolor="white" width="1000" cellpadding="9" cellspacing="0" height="525">
          <tr>
          <h2 style="font-size:60px ;background:white; padding: 60px;"> Prisoner Registration Form</h2>
          </tr>  
          <tr>
            <tr>
            <a href="adminpanel.php" style="font-size:30px;color:black">|HOME|</a> <br>
          </tr></br>
           
          </tr>
          <tr>
            <td width="50%"  bgcolor="white">
    
          <div id="content" class="ctrdiv">
           <form id="frmReg" method="POST" action="prisonval.php">
            <div class="control_input">
                <label for="Nid" class="label">National Id</label><input type="text" id="Nid" name="Nid" size=8  maxlength=8 class="reg_fields" required placeholder="0000"  /> 
            </div><br>
            <div class="control_input">
                <label for="Fname" class="label">Full Name</label><input type="text" id="Fname" name="Fname" class="reg_fields" required placeholder="anotony mathew"/>
            </div><br>

            <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="dateofbirth" class="label">Birth Date</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="lMonth" name="1Month" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;display:block;">
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
                        <input type="text" id="txtDay" name="txtDay" style="width: 40px;"required placeholder ="DD" class="reg_fields"/>
                        <input type="text" id="txtYear" name="txtYear" style="width: 60px;" required placeholder="YYYY" class="reg_fields"/>
                    </td>
                    </tr></table>
                </div>
            </div><br>

            <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="datein" class="label">Date In</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="lMonth" name="2Month" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;display:block;">
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
                        <input type="text" id="TxtDay" name="TxtDay" style="width: 40px;" required placeholder="DD" class="reg_fields"/>
                        <input type="text" id="TxtYear" name="TxtYear" style="width: 60px;" required placeholder="YYYY" class="reg_fields"/>
                    </td>
                    </tr></table>
                </div>
            </div><br>

             <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="dateout" class="label">Date Out</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="lMonth" name="3Month" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;display:block;">
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
                        <input type="text" id="TXtDay" name="TXtDay" style="width: 40px;" required placeholder="DD" class="reg_fields"/>
                        <input type="text" id="TXtYear" name="TXtYear" style="width: 60px;" required placeholder="YYYY" class="reg_fields"/>
                    </td>
                    </tr></table>
                </div>
            </div><br>

            <div class="control_input">
                <label for="address" class="label">Address</label>
                <textarea cols="17" rows="4" name="Address" required placeholder="address"></textarea>
            </div>
            
             <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="country" class="label">District</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="country" name="country" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;display:block;">
                            <option selected="selected" value="01">Alapuzha</option>
                            <option value="02">Ernakulam</option>
                             <option value="03">Idukki</option>
                            <option value="04">Kannur</option>
                           <option value="04">Kasaragod</option>
                           <option value="06">Kollam</option>
                           <option value="07">Kozhikode</option>
                           <option value="08">Kollam</option>
                           <option value="09">Malapuram</option>
                            <option value="10">Palakkad</option>
                           <option value="11">Pathanamttitta</option>
                           <option value="12">Thrissure</option>
                           <option value="13">Thrivandrum</option>
                           <option value="14">Wayyanad</option>
                    
                        </select>
                    </td>
                    </tr></table>
                </div><br>

            <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="Gender" class="label">Gender</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="Gender" name="Gender" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;display:block;">
                            <option selected="selected" value="01">Male</option>
                            <option value="02">Female</option>
                            <option value="03">Transgender</option>
                        </select>
                    </td>
                    </tr></table>
                </div></br>

                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="education" class="label">Education Level</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="education" name="education" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;display:block;">
                            <option selected="selected"> </option>
                            <option value="01">Never</option>
                            <option value="02">10th</option>
                            <option value="03">12th</option>
                            <option value="04">UG</option>
                            <option value="05">PG </option>
                            <option value="06">Above</option></td></tr>
                        </select>
                    </td>
                    </tr></table>
                </div><br>

                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="status" class="label">Maritial Status</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="status" name="status" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;display:block;">
                            <option selected="selected" value="01">Fiancee</option>
                            <option value="02">Divorced</option>
                            <option value="03">Married</option>
                            <option value="04">Single</option>
                            <option value="05">In Relationship</option></td></tr>
                        </select>
                    </td>
                    </tr></table>
                </div><br>
             
                <div class="control_input">
                <label for="offence" class="label">Offence</label>
                <textarea cols="17" rows="4" name="offence" required placeholder="fill this box"></textarea>
                </div>

                 <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="sentence" class="label">Sentence</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="sentence" name="sentence" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; display:block;">
                            <option selected="selected" value="01">3 months</option>
                            <option value="02">6 months</option>
                            <option value="03">1 year</option>
                            <option value="04">2 years</option>
                            <option value="05">3 year</option>
                            <option value="06">5 year</option>
                            <option value="07">7 year</option>
                            <option value="08">10 year</option></td></tr>
                        </select>
                    </td>
                    </tr></table>
                </div><br>


            <div class="control_input">
                <label for="Filenum" class="label">File Number</label><input type="text" id="Filenum" name="Filenum"  size=8  maxlength=8 class="reg_fields" required placeholder="xxx"/>
            </div><br>
             
                <div class="control_input">
                <input type="submit" name="signup" id="signup" value="Submit" >
                </div class="control_input">
            <div id="validation_msg">
            </div>
    </form>
</td>
</td>
</tr>
<tr>
<td bgcolor="white" colspan="3" align="left">
&copy; Prison Management System</td>
</tr>
</table>
</body>
</html>
