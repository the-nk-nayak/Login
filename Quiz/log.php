<?php
include 'db1.php';

$user = $_POST['username'];
$email = $_POST['email'];

$query1 = "Select * from Registration";
$result = mysqli_query($conn, $query1);

while ($row = mysqli_fetch_assoc($result)) {
    if ($user == $row['username']) {
        echo "you logged in successfully";
    }
}
