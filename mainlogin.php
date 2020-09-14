<?php
session_start();
$host="localhost";
$username="";
$password="";
$db_name="test";
$tbl_name="manager";
$con=mysqli_connect("$host","$username","$password")or die("cannot connect");
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");
if(isset($_POST['username']) && isset($_POST['password']))
{
    $usrnm=$_POST['username'];
    $pswd=$_POST['password'];
    $ab="select * from manager where username='$usrnm' and password='$pswd'";
    $result=mysqli_query($con,$ab)or die(mysqli_error($con));
    $cnt=mysqli_num_rows($result);
    if($cnt==true)
    {
      header('Location:mainlogin2.php');
    }
    else
    {
        echo"<centre><h2 style='color:red'>ACCESS DENEID</h2></center>";
    }
}
ob_end_flush();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}
form{
  position:fixed;
  margin-left: 800px;
  bottom:30%;
  
 
}
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color:white;

}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body style="background-image: url('/Tanishq-ropes-Actress-Nayanthara-as-its-new-face-for-South-India.jpg');
   background-repeat: no-repeat;
   background-size: cover;">
   <form name="form1" id="f1" method="post" action="">
<table >
     <tr>
<form name="form1" id="f1" method="post" action="">
<td>
<table style="width='100%'; border='0'; cellpading='3'; cellspacing='1';bgcolor='#FFFFFF'">
<tr>
<td style="color: white">username</td>
<td style="color: white;width= 6">:</td>
<td width="294"><input name="username"type="text" id="username"></td>
</tr>
<tr>
<td style="color: white">password</td>
<td style="color: white">:</td>
<td><input name="password" type="password" id="password"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="login"></td>
</tr>
</table>
</td>
</tr>
</table>
</form>


  


</body>
</html>

