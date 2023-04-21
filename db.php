<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "quiz";
$conn = mysqli_connect($server, $username, $password, $database);

if (mysqli_connect_errno()) {
    die("Database Connection failed" . mysqli_connect_error() . "(" . mysqli_connect());
}
