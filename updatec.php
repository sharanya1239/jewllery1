<?php
         if(isset($_POST['update'])) {
            $dbhost = 'localhost';
            $dbuser = '';
            $dbpass = '';
            $dbname= "test";
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
            
            if(! $conn ) {
               die('Could not connect: ' . mysqli_error($conn));
            }
            
            $customer_id= $_POST['customer_id'];
            $address = $_POST['address'];
            
            $sql = "UPDATE customer SET 'address' = '$address'  
               WHERE customer_id = '$customer_id'" ;
           
            $retval = mysqli_query( $conn,$sql );
            
            if(! $retval ) {
               die('Could not update data: ' . mysqli_error($conn));
            }
            echo "Updated data successfully\n";
            
            mysqli_close($conn);
         }
         ?>





<html>
   
   <head>
      <title>Update a Record in MySQL Database</title>
   </head>
   
   <body>
      
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table style= "width :400; border : 0; cellspacing :1 
                     cellpadding:2">
                  
                     <tr>
                        <td width = "100">CUSTOMER_ID</td>
                        <td><input name = "customer_id" type = "text" 
                           id = "customer_id"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">ADDRESS</td>
                        <td><input name = "address" type = "text" 
                           id = "address"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update"  action="#">
                        </td>
                     </tr>
                  
                  </table>
               </form>
           
      
   </body>
</html>