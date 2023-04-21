<?php
include 'db.php';
session_start();
//set Q. NO
$number = $_GET['n'];

//Query for question
$query = "SELECT * from questions WHere question_number=$number";
$result = mysqli_query($conn, $query);
$question = mysqli_fetch_assoc($result);

//Get option

$query = "SELECT * from options WHere question_number=$number";
$choices = mysqli_query($conn, $query);

//Get Total Q.NO

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
            <div class="current">
                Question <?php echo $number ?> of <?php echo $total ?>
            </div>
            <p><?php echo $question['question_text'] ?></p>
            <form method="POST" action="process.php">
                <ul class="choices">
                    <?php while ($row = mysqli_fetch_assoc($choices)) { ?>
                        <li><input type="radio" name="choice" value="<?php echo $row['id'] ?>"><?php echo $row['coption'] ?></li>
                    <?php } ?>
                </ul>
                <input type="hidden" name="number" value="<?php echo $number ?>">
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </main>

</body>

</html>