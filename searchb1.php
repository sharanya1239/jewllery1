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
    $q="SELECT * FROM bill WHERE bill_id='$key'";
    $result = mysqli_query($conn, $q);  
    while($row = mysqli_fetch_array($result)){
            echo '<table>
            <tr>
            <th>bill_id</th>
            <th>customer_id</th>
            <th>date</th>
            <th>total_bill</th>

            </tr>
            <tr>
            <td>'.$row['bill_id'].'</td>
            <td>'.$row['customer_id'].'</td>
            <td>'.$row['date'].'</td>
            <td>'.$row['total_bill'].'</td>

            </tr>
            </table>';

           }
          }
Mysqli_close($conn);
?>
