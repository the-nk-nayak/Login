<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "regis";



$conn = mysqli_connect($servername, $username, $password, $database);
//check connection

$name=$_POST['username'];
$pswrd=$_POST['password'];

$query="SELECT * FROM userinfo";

$result=mysqli_query($conn, $query);

while ($row=mysqli_fetch_assoc($result)) {
    if ($name==$row['username'])
    {
        echo "<a href='www.google.com'></a>";
       break; 
    }
    else{
        echo "<a href='userinfo.php'>click</a>";
        break;
       
    }
}
?>