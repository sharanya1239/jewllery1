
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <title>Search</title>
</head>
<style>
  #search{
    float:left;
    width:250px;
    height:150px;
    background-color:white;
    box-shadow: 5px 10px 18px #888888;
    margin-top: 200px;
    margin-left: 30px;
  }
  table{
    position: absolute;
    top: 25%;
    left: 46%;
    font-size:2em;
    color:white;
    font-weight:800;
  }
</style>
<body style="background-image: url('f7.jpg');background-repeat: no-repeat;  
background-size: cover">
    <h1 style="text-align: center; color:white">JEWELLERY</h1>
    <form action="searchc1.php" method="POST">
      <br>
        <input type="text" name="key" placeholder="Enter the customer_id" 
            style="width:150px;height:35px;margin-left:15px;"><br><br>
        <button type="submit" class="btn btn-primary" name="s_submit" value="customer_id" 
        style="width:80px;height:30px;margin-left:15px; margin-bottom:5px">Search<br>
      </form> <br><br> 
</body>
</html>