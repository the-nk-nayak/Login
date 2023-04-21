<?php
include 'db.php';
session_start();

if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}

if ($_POST) {

    //Get Total Q.NO
    $query1 = "Select * from questions";
    $questions = mysqli_query($conn, $query1);
    $total = mysqli_num_rows($questions);

    //Q. No From Form Submission
    $number = $_POST['number'];

    //option seelcted by user
    $selected_choice = $_POST['choice'];

    //next Q. No
    $next = $number + 1;

    //correct choice for correct option
    $query = "SELECT *from options where question_number=$number and is_correct =1";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    $correct_choice = $row['id'];

    //increse score
    if ($selected_choice == $correct_choice) {
        $_SESSION['score']++;
    }


    //Redirect to first or final page
    if ($number == $total) {
        header("LOCATION:complete.php");
    } else {
        header("LOCATION:que.php?n=" . $next);
    }
}
