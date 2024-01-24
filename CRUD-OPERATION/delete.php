<?php

include 'connection.php';
$email=$_GET['email'];

$deletequery = "DELETE from temp where email='$email'"; 
$query = mysqli_query($con, $deletequery);

header('location:index.php');


?>