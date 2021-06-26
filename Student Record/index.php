<html>

  <head>

  <script type="text/javascript" src="validate.js"></script>

  </head>

  <body>

  <form action="#" name="StudentRecord" onSubmit="return(validate());">

   <table cellpadding="2" width="20%" bgcolor="99FFFF" align="center"cellspacing="2">


<tr>

  <td colspan=2>

  <center><font size=4><b>Student Record</b></font></center>

  </td>

  </tr>


<tr>

  <td>First Name</td>

  <td><input type=text name=fnames id="fname" size="30"></td>

  </tr>


<tr>

  <td>Last Name</td>

  <td><input type="text" name="lname" id="lname"size="30"></td>

 </tr>

<tr>

  <td>EmailId</td>

  <td><input type="text" name="emailid" id="emailid" size="30"></td>

</tr>


<tr>

  <td>DOB</td>

  <td><input type="text" name="dob" id="dob" size="30"></td>

  </tr>


<tr>

  <td>MobileNo</td>

  <td><input type="text" name="mobileno" id="mobileno" size="30"></td>

  </tr>

<tr>

  <td>Postal Address</td>

  <td><textarea name="paddress" placeholder="Your Address Please.." style="height:100px"></textarea></td>

</tr>


<tr>

  <td>Personal Address</td>

  <td><textarea name="peraddress" placeholder="Your Address Please.." style="height:100px"></textarea></td>

 </tr>


<tr>

  <td>Sex</td>

  <td><input type="radio" name="sex" value="male" size="10">Male

  <input type="radio" name="sex" value="Female" size="10">Female</td>
</tr>


<tr>

  <td>City</td>

  <td><select name="City">

  <option value="-1" selected>select..</option>

  <option value="New Delhi">NEW DELHI</option>

  <option value="Mumbai">MUMBAI</option>

  <option value="Goa">GOA</option>

  <option value="patna">Patna</option>

  <option value="up">Gorakhpur</option>

  <option value="kol">Kolkata</option>

  <option value="indore">Indore</option>

  </select></td>

</tr>


<tr>

  <td>District</td>

  <td><select name="District">

  <option value="-1" selected>select..</option>

  <option value="Nalanda">NALANDA</option>

  <option value="Gorakhpur">UP</option>

  <option value="Bettiah">GOA</option>

  <option value="Patna">PATNA</option>

  <option value="Motihari">Motihari</option>

  <option value="muza">Muzaffarpur</option>

  <option value="kolkata">Kolkata</option>

  <option value="bettiah">Bettiah</option>

 
  </select></td>
</tr>

<tr>

  <td>State</td>

  <td><select Name="State">

  <option value="-1" selected>select..</option>

  <option value="New Delhi">NEW DELHI</option>

  <option value="Mumbai">MUMBAI</option>

  <option value="Goa">GOA</option>

  <option value="Bihar">BIHAR</option>

  <option value="uttar">Uttar Pradesh</option>

  <option value="mp">M.P.</option>

  <option value="assam">Assam</option>


  </select></td>

</tr>

<tr>

  <td>Pin Code</td>

  <td><input type="text" name="pincode" id="pincode" size="30"></td>

  </tr>

<tr>

<tr>

  <td>Qualification</td>

  <td><select name="qualification">

  <option value="-1" selected>select..</option>

  <option value="B.Tech">B.TECH</option>

  <option value="MCA">MCA</option>

  <option value="MBA">MBA</option>

  <option value="BCA">BCA</option>

  </select></td>

  </tr>

<td>Institute Name</td>

  <td><select name="institute">

  <option value="-1" selected>select..</option>

  <option value="rajiv">Rajiv Gandhi University</option>

  <option value="Tezpur">Tezpur University</option>

  <option value="Assam">Assam University</option>

  <option value="Pondicherry">Pondicherry University</option>

   <option value="Delhi">Delhi University</option>

  <option value="pune">Pune University</option>


  </select></td>

</tr>

<tr>

  <td>Skills :</td>

  <td required><input type="checkbox" name="skill" value="java">JAVA 

  <input type="checkbox" name="skill" value="php">PHP

  <input type="checkbox" name="skill" value="python">PYTHON

  <input type="checkbox" name="skill" value="web">WEB APPLICATION

  <input type="checkbox" name="skill" value="web">ORACLE

</tr>


<tr>

  <td>Experience</td>

  <td><select name="experience">

  <option value="-1" selected>select..</option>

  <option value="fresher">Fresher</option>

  <option value="one">0-1</option>

  <option value="two">0-2</option>

  <option value="three">0-3</option>

   <option value="four">0-4</option>

  <option value="five">0-5</option>

  <option value="more">More than 5</option>

  </select></td>

  </tr>

<tr>
   
  <td>Resume Upload</td>
  <td>
  <input type="file" id="myFile" name="filename" required>
  </td>
</tr>


<tr>

  <td><input type="reset"></td>

  <td colspan="2"><input type="submit" value="Submit Form" /></td>

</tr>

  </table>

  </form>

  </body>

  </html>