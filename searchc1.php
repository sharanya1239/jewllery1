<?php
session_start();
$server_name = "localhost";
$username = "";
$password = "";
$dbname = "test";
$conn =  mysqli_connect($server_name, $username,$password,$dbname)or die(Mysqli_error());
$select_db = mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
if(isset($_POST['key']))
{
   $key=$_POST['key'];
    $q="SELECT * FROM customer WHERE customer_id='$key'";
    $result = mysqli_query($conn, $q);  
    while($row = mysqli_fetch_array($result)){
            echo '<table>
            <tr>
            <th>cus</th>
            <th>name</th>
            <th>address</th>
            <th>phno</th>

            </tr>
            <tr>
            <td>'.$row['customer_id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['address'].'</td>
            <td>'.$row['phno'].'</td>

            </tr>
            </table>';

           }
          }
Mysqli_close($conn);
?>
