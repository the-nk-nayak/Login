<?php
include 'db.php';

$query1 = "Select * from questions";
$questions = mysqli_query($conn, $query1);
$total = mysqli_num_rows($questions);





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <h3>Online Quiz</h3>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>
                Test Your Knowledge
            </h2>
            <p>
                This is multiple choiec quiz to test your knowledge
            </p>
            <ul>
                <li><strong>No of Questions :</strong> <?php echo $total  ?></li>
                <li><strong>Type : </strong> Multiple choice</li>
            </ul>
            <a href="que.php?n=1" class="start">Start Quiz</a>
        </div>
    </main>

</body>

</html>