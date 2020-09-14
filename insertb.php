<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="bill";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM bill ";


$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{
	$usn=$_POST['bill_id'];
	$name=$_POST['date'];
    $sem=$_POST['totalbill'];
    $phone=$_POST['customer_id'];
    
    
	$q="SELECT bill_id FROM bill WHERE bill_id='$usn'";
	$cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$ret=mysqli_num_rows($cq);
	if($ret==true)
	{
		echo"<center><h2 style='color:red'>bill_id already exists</h2></center>";
	}
	else
	{
		$query="INSERT INTO $tbl_name VALUES('$usn','$name','$sem','$phone')";
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
<td><label for="usn">BILL_ID</label></td>
<td><input id="bill_id" maxlength="50" name="bill_id" type="text"></td>
</tr>
<tr>
<td><label for="name">DATE</label></td>
<td><input id="date" maxlength="50" name="date" type="text"></td>
</tr>
<tr>
<td><label for="sem">TOTAL BILL</label></td>
<td><input id="customer_id" maxlength="50" name="totalbill" type="text"/></td>
</tr>
<tr>
<td><label for="phone">CUSTOMER ID</label></td>
<td><input id="total_bill" maxlength="50" name="customer_id" type="number_format"/></td>
</tr>
<tr>
<td style="align:right"><input name="Submit" type="Submit" value="Add"/>&nbsp;<input type="reset" onClick="refresh()"></p></td>
</tr>
</tbody>
</table>
</form>
</html>






