<!DOCTYPE html>
<html>
<head>
<script src="../js/myjs"></script>
</head>
<body style="background-color:powderblue;">

<div align="center">
<h1>Welcome To Registration Page</h1>
<form name="myForm" action="" onsubmit="return validateForm()" method="post">
<table>
<tr><td><center>First Name: </center> </td></tr>
<br>
<tr><td><center><input type="text" name="fname" ></center></td></tr>
<br>
<br>
<tr><td><center>Last Name: </center> </td></tr>
<br>
<tr><td><center><input type="text" name="lname" ></center></td></tr>
<br>
<br>

<tr><td><center>Email: </center> </td></tr>
<br>
<tr><td><center><input type="text" name="email" >/<center></td></tr>
<br>
<br>


<tr><td><center>Password: </center> </td></tr>
<br>
<tr><td><center><input type="text" name="pass" id="pass" ></center></td></tr>
<br>
<br>

<tr><td><center>Confirm Password: </center> </td></tr>
<br>
<tr><td><center><input type="text" name="cpassword" id="cpass" ></center></td></tr>
<br>
<br>

<tr>
<td> <center>Gender: </td></tr></center>
<br>
<tr><td>  <input type="radio" id="male" name="gender" value="m">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="f">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="o">
  <label for="other">Other</label></td>
<br>


<tr><td><center><label for="City">City: </center></label>
  <center><select name="cn" id="cn"></center>
   <center> <optgroup>
   <option selected hidden>Select City</option>
    <option value="Dhaka">Dhaka</option>
      <option value="Chittagong">Chittagong</option>
      <option value="Khulna">Khulna</option>
      <option value="Kushtia">Kushtia</option>
    </optgroup>
 </select></td></tr>
  <br><br>



<tr><td><center><input type="submit" value="Submit"></center></td></tr>

</form> 
</div>
<br>


</body>
</html>