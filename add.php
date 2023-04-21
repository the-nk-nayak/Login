<?php
include 'db.php';
if (isset($_POST['submit'])) {
    $question_number = $_POST['question_number'];
    $question_text = $_POST['question_text'];
    $correct_choice = $_POST['correct_choice'];

    //choice Array
    $choice = array();
    $choice[1] = $_POST['choice1'];
    $choice[2] = $_POST['choice2'];
    $choice[3] = $_POST['choice3'];
    $choice[4] = $_POST['choice4'];

    //Query for question table
    $query = "INSERT INTO `questions` (`question_number`, `question_text`) VALUES ('$question_number', '$question_text');";

    $result = mysqli_query($conn, $query);

    //validate Query
    if ($result) {
        foreach ($choice as $option => $value) {
            if ($value != null) {
                if ($correct_choice == $option) {
                    $is_correct = 1;
                } else {
                    $is_correct = 0;
                }

                //Query for options table
                $query = "INSERT INTO `options` (`id`, `question_number`, `is_correct`, `coption`) VALUES (NULL, '$question_number', '$is_correct', '$value');";
                $insert_row = mysqli_query($conn, $query);

                //Validate insertion
                if ($insert_row) {
                    continue;   
                } else {
                    die("2nd query for choice could not be executed");
                }
            }
        }
        $message = "Question has been added successfully";
    }
}

$query1 = "Select * from questions";
$questions = mysqli_query($conn, $query1);
$total = mysqli_num_rows($questions);
$next = $total + 1;
if (!$total) {
    echo "Error";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <?php

        ?>


<div class="nava">
        
        
        </div>
        <div style="padding-left:16px">
        </div>
      <div class="center">
      <h1>ADD QUESTIONS</h1>
      
      <form action="add.php" method="post">
  
      <div class="text1">
      <input type="number" name="question_number" value="<?php echo $next; ?>">
          <span></span>
          <label >Question Number:</label>
      </div>

      <div class="text1">
      
                <input type="text" name="question_text">
          <span></span>
          <label>Question Text:</label>
      </div>

      <div class="text1">
      
      <input type="text" name="choice1">
    <span></span>
    <label>Choice 1:</label>
                
    </div>

    <div class="text1">
      
      <input type="text" name="choice2">
    <span></span>
    <label>Choice 2:</label>
                
    </div>

    <div class="text1">
      
      <input type="text" name="choice3">
    <span></span>
    <label>Choice 3:</label>
                
    </div>

    <div class="text1">
      
      <input type="text" name="choice4">
    <span></span>
    <label>Choice 4:</label>
                
    </div>


    <div class="text1">
      
    <input type="number" name="correct_choice">
    <span></span>
    <label>Correct Option:</label>
                
    </div>

    <input type="submit" name="submit" value="submit">




      <!-- <div class="pass">Forgot Password</div> -->
      
   
  
  
    
     
  
  </form>
  




    

</body>

</html>