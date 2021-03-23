<?php

session_start();



$validateeid="";
$validateename="";
$validatepcode="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $eid=$_REQUEST["eid"];
    $ename=$_REQUEST["ename"];
    $pcode=$_REQUEST["pcode"];
    $data = $_POST;

if (empty($data['eid']) ||
    empty($data['ename']) ||
    empty($data['email']) ||
    empty($data['bd']) ||
    empty($data['street']) ||
    empty($data['state']) ||
    empty($data['pcode']) ||
    empty($data['cn']) ||
    empty($data['myfile']))
     {
    
    die('Please fill all required fields!');
}
else
{
    $_SESSION["eid"] = $_POST['eid'];
    $_SESSION["ename"] = $_POST['ename'];
    $_SESSION["email"] = $_POST['email'];
    $_SESSION["bd"] = $_POST['bd'];
    $_SESSION["street"] = $_POST['street'];
    $_SESSION["state"] = $_POST['state'];
    $_SESSION["pcode"] = $_POST['pcode'];
    $_SESSION["cn"] = $_POST['cn'];
    $_SESSION["myfile"] = $_POST['myfile'];
}


    $eid = $_POST ["eid"]; 
if (!preg_match ("/^[a-zA-z,_,-]*$/", $eid) ) {  
    $ErrMsg = "numeric characters and '-' only";  
             echo $ErrMsg;  
}  
 else {  
  echo "Your  eid is: " .$eid;

}

$eid = $_POST ["ename"]; 
if (!preg_match ("/^[A-Z]*$/", $ename) ) {  
    $ErrMsg = "Alphabetic characters only";  
             echo $ErrMsg;  
}  
 else {  
  echo "Your  ename is: " .$ename;

}

$eid = $_POST ["pcode"]; 
if (!preg_match ("/^[0-9]*$/", $pcode) ) {  
    $ErrMsg = "Numeric Values Only";  
             echo $ErrMsg;  
}  
 else {  
  echo "Your  postcode is: " .$pcode;

}




}



?>