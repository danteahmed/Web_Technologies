function validateForm() {
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;
    var cpass = document.getElementById("cpass").value;
    var cn = document.getElementById("cn").value;

    if (fname == "" || lname == "" || email == "" || pass == "" || cpass == "" ) {
      alert("all fields must be filled out");
      return false;
    }


    if (!preg_match ("/^[a-zA-z]*$/") ) {  

        document.getElementById("fname").innerHTML="invalid name format";
return false;
        
    } 

    if (!preg_match ("/^[a-zA-z]*$/") ) {  

        document.getElementById("lname").innerHTML="invalid name format";
return false;
        
    }

var atpos=e.indexOf("@");
var dotpos=e.lastIndexOf(".");
if(atpos<4 || dotpos<atpos+3)
{
document.getElementById("email").innerHTML="invalid email";
}
else
{
document.getElementById("error2").innerHTML="";
}
if(pass.length<6){  
    document.getElementById("pass").innerHTML="Password must be at least 6 characters long.";  
    return false;  
    }  
if(pass==cpass){  
        return true;  
        }  
        else{  
        document.getElementById("pass" || "cpass").innerHTML= ("password must be same!");  
        return false;  
        } 

  }