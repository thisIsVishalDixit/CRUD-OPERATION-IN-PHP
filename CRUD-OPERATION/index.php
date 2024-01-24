

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
            text-align: center;
            background-color: white;
            color: black;
            font-size: large;
            margin: 15px;
            font-family: "Times New Roman", Times, serif;
        }
     
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="" method="POST">
    Name : <input type="text" placeholder="Enter name here" name="name" required><br><br>
    Mobile : <input type="text" placeholder="Enter mobile number here" name="mobile" pattern="[0-9]{10}" required><br><br>
    Email : <input type="email" placeholder="Enter email here" name="email" required><br><br>
    City : <input type="text" placeholder="Enter city name here" name="city" required><br><br>
    Address : <input type="text" placeholder="Enter address here" name="address" required><br><br>
    <input type="submit" name="submit">
    <input type="reset">
    <div>

    </div>
    <input type="radio" name="select">
    <label for="male">male</label>
    <div>
    <input type="radio" name="select">
    <label for="female">female</label>
    </div>
  
    <div>
  

    <a href="display.php">Check data</a>

</form>

</body>
</html>



<!-- link to connection.php file -->
<?php
    include 'connection.php';

    if(isset($_POST['submit'])){

        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $city=$_POST['city'];
        $address=$_POST['address'];

        $insertQuery="INSERT INTO temp(nam, mobile, email, city, addr) VALUES ('$name', '$mobile', '$email', '$city', '$address')";

        $res = mysqli_query($con, $insertQuery);
        if($res){
    
          echo " <script> alert('data inserted successful!'); </script>";

        }else{
            echo " <script> alert('data not inserted'); </script>";
        }
    }
    
?>
<!-- link to connection.php file --> 




