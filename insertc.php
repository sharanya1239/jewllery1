<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="customer";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM customer ";


$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{
	$usn=$_POST['customer_id'];
	$name=$_POST['name'];
    $sem=$_POST['address'];
    $phone=$_POST['phno'];

    
    
	$q="SELECT customer_id FROM customer WHERE customer_id='$usn'";
	$cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$ret=mysqli_num_rows($cq);
	if($ret==true)
	{
		echo"<center><h2 style='color:red'>customer_id already exists</h2></center>";
	}
	else
	{
		$query="INSERT INTO customer VALUES('$usn','$name','$sem','$phone')";
		mysqli_query($conn,$query)or die(mysqli_error($conn));
		echo"<center><h2 style='color:green'>Details saved!</h2></center>";
	}
}
Mysqli_close($conn);
?>
<html>
<head>
</head>
<body >
<form action="" method="POST">
<table style="border:0;align:center">
<tbody>
<tr>
<td><label for="usn">CUSTOMER_ID</label></td>
<td><input id="customer_id" maxlength="50" name="customer_id" type="text"></td>
</tr>
<tr>
<td><label for="name">NAME</label></td>
<td><input id="name" maxlength="50" name="name" type="text"/></td>
</tr>
<tr>
<td><label for="sem">ADDRESS</label></td>
<td><input id="address" maxlength="50" name="address" type="text"/></td>
</tr>
<tr>
<td><label for="phone">PHNO</label></td>
<td><input id="phno" maxlength="50" name="phno" type="number_format"/></td>
</tr>
<tr>
<td style="align:right"><input name="Submit" type="Submit" value="Add"/>&nbsp;<input type="reset" onClick="refresh()"></p></td>
</tr>
</tbody>
</table>
</form>
</html>






