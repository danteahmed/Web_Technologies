<?php

session_start();

if(empty($_SESSION["eid"]))
{
   header("location: ../View/RegistrationForm.php");
}
?>


<!DOCTYPE html>
<html>
<head>
<body style="background-color:powderblue;">

<h2>Thank You</h2>

Hii,<h3><?php echo $_SESSION["ename"];?><h3>
<h4>Your Registration Is Successful.<h4>
<br>
<br>

<h5>Do you want to <a href="../Control/logout.php">Logout</a><h5>


</body>
</html>