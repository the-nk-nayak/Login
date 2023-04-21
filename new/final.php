<?php
session_start();
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
            <h2>Your Result</h2>
            <p>Your Score is <?php echo $_SESSION['score']; ?></p>
            <?php unset($_SESSION['score']); ?>
        </div>
    </main>

</body>

</html>