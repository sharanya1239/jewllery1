<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="item";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM item ";


$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{
	$usn=$_POST['item_id'];
	$name=$_POST['type'];
	$sem=$_POST['name'];
	$q="SELECT item_id FROM item WHERE item_id='$usn'";
	$cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$ret=mysqli_num_rows($cq);
	if($ret==true)
	{
		echo"<center><h2 style='color:red'>item_id already exists</h2></center>";
	}
	else
	{
		$query="INSERT INTO item VALUES('$usn','$name','$sem')";
		mysqli_query($conn,$query)or die(mysqli_error($conn));
		echo"<center><h2 style='color:green'>Details saved!</h2></center>";
	}
}
Mysqli_close($conn);
?>
<html>
<head>
</head>
<body style ="background-color:#E5E5E5;background-image: url(\image\thMO8ZRC5A.jpg);">
<form action="" method="POST">
<table style="border:0;align:center">
<tbody>
<tr>
<td><label for="id">ITEM_ID:</label></td>
<td><input id="item_id" maxlength="50" name="item_id" type="text"></td>
</tr>
<tr>
<td><label for="name">TYPE:</label></td>
<td><input id="type"maxlength="50" name="type" type="text"/></td>
</tr>
<tr>
<td><label for="sem">NAME:</label></td>
<td><input id="name" maxlength="50" name="name" type="number_format"/></td>
</tr>
<tr>
<td><label for="sem">PRICE</label></td>
<td><input id="name" maxlength="50" name="PRICES" type="number_format"/></td>
</tr>
<tr>
<td style="align:right"><input name="Submit" type="Submit" value="Add"/>&nbsp;<input type="reset" onClick="refresh()"></p></td>
</tr>
</tbody>
</table>
</form>
</html>






