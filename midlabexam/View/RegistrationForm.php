
<?php


include "../Control/Validation.php" ;

if(isset($_SESSION['eid']))
{
    header("location: Success.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<body style="background-color:powderblue;">

<div align="center">
<h1>My Registration Page</h1>
<form action="<?php  echo $_SERVER["PHP_SELF"];?>" method="post">
<table>
<tr><td><center>Employee ID: </center> </td></tr>
<br>
<tr><td><center><input type="text" name="eid" ></center></td></tr>
<br>
<br>
<tr><td><center>Employee name: </center> </td></tr>
<br>
<tr><td><center><input type="text" name="ename" ></center></td></tr>
<br>
<br>

<tr><td><center>Email: </center> </td></tr>
<br>
<tr><td><center><input type="text" name="email" >/<center></td></tr>
<br>
<br>

<tr><td><center>Date of Birth: </center> </td></tr>
<br>
<tr><td><center><input type="date" name="bd" ></center></td></tr>
<br>
<br>

<tr><td><center>Street: </center> </td></tr>
<br>
<tr><td><center><input type="text" name="street" ></center></td></tr>
<br>
<br>

<tr><td><center>State: </center> </td></tr>
<br>
<tr><td><center><input type="text" name="state" ></center></td></tr>
<br>
<br>

<tr><td><center>Post Code: </center> </td></tr>
<br>
<tr><td><center><input type="text" name="pcode" ><center></td></tr>
<br>
<br>


<tr><td><center><label for="Country">Country: </center></label>
  <center><select name="cn" id="cn"></center>
   <center> <optgroup label="Please Select Country">
    <option value="Bangladesh">Bangladesh</option>
      <option value="USA">USA</option>
      <option value="India">India</option>
      <option value="Nepal">Nepal</option>
    </optgroup>
 </select></td></tr>
  <br><br>

<tr><td><center>Profile Picture: </center> 
<center><label for="myfile"></label>
  <input type="file" id="myfile" name="myfile"></td></tr></center>
<br>
<br>


<tr><td><center><input type="submit" value="Submit"></center></td></tr>

</form> 
</div>
<br>


</body>
</html>

