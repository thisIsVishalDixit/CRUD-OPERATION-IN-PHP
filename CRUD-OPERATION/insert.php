<?php

include 'index.php';

 if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $address=$_POST['address'];

    $insertQuery="INSERT INTO temp(nam, mobile, email, city, addr) VALUES ('$name', '$mobile', '$email', '$city', '$address')";

    $res = mysqli_query($con, $insertQuery);
    if($res){
        echo "data inserted";
    }else{
        echo "data not inserted: " . mysqli_error($con);
    }
}
?>