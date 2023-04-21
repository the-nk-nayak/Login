<?php
include 'db1.php';

$user = $_POST['username'];
$email = $_POST['email'];
$number = $_POST['mobile_no'];


$query = "INSERT INTO `registration` (`username`, `email`, `mobile_number`) VALUES ('$user', '$email', '$number');";
mysqli_query($conn, $query);
