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
    $q="SELECT * FROM item WHERE item_id='$key'";
    $result = mysqli_query($conn, $q);  
    while($row = mysqli_fetch_array($result)){
            echo '<table>
            <tr>
            <th>item_id</th>
            <th>type</th>
            <th>name</th>
            <th>price</th>
            <th>date</th>

            </tr>
            <tr>
            <td>'.$row['item_id'].'</td>
            <td>'.$row['type'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['price'].'</td>
            <td>'.$row['date'].'</td>

            </tr>
            </table>';

           }
          }
Mysqli_close($conn);
?>
