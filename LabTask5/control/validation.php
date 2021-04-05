<?php

session_start();


$validatefname="";
$validatelname="";
$validatepass="";
$validatecpassword="";
$validateemail="";
$validatebd="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $pass=$_REQUEST["pass"];
    $cpassword=$_REQUEST["cpassword"];
    $email=$_REQUEST["email"];
    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];

    $data = $_POST;

if (empty($data['fname']) ||
    empty($data['lname']) ||
    empty($data['email']) ||
    empty($data['pass']) ||
    empty($data['cpassword']) ||
    empty($data['cn']) )
     {
    
    die('Please fill all required fields!');
}
else
{
    $_SESSION["fname"] = $_POST['fname'];
    $_SESSION["lname"] = $_POST['lname'];
    $_SESSION["email"] = $_POST['email'];
    $_SESSION["pass"] = $_POST['pass'];
    $_SESSION["cpassword"] = $_POST['cpassword'];
    $_SESSION["cn"] = $_POST['cn'];
}


$eid = $_POST ["fname"]; 
if (!preg_match ("/^[a-zA-z]*$/", $fname) ) {  
    $ErrMsg = "Alphabetic Characters Only";  
             echo $ErrMsg;  
}  
 else {  
  echo  $fname;

}

$eid = $_POST ["lname"]; 
if (!preg_match ("/^[a-zA-z]*$/", $lname) ) {  
    $ErrMsg = "Alphabetic Characters Only";  
             echo $ErrMsg;  
}  
 else {  
  echo  $lname;

}

$email = $_POST ["email"];  
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
if (!preg_match ($pattern, $email) ){  
    $ErrMsg = "Email is not valid.";  
            echo $ErrMsg;  
} else {  
    echo  $email;  
}  


$password = $_POST ["pass"];
$cpassword = $_POST["cpassword"];
if (!preg_match  ( "^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$^", $pass))
{
    $ErrMsg = "password is not valid.";
    echo $ErrMsg;
}
elseif (strcmp($pass, $cpassword) !== 0) {
    $ErrMsg = "Passwords must match!";
    echo $ErrMsg;
}
else {
        echo $pass;
    }




}



?>