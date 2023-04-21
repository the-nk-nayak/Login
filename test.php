<?php
include 'db.php';

$query1 = "Select * from questions";
$questions = mysqli_query($conn, $query1);
$total = mysqli_num_rows($questions);





?>



<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>

    
      <div style="padding-left:16px">
      </div>
    <div class="center">
    <h1>QUIZ TEST</h1>
    <form action="test.php" method="post">
   
    <div class="text1">
        <input palceholder="No of questions">
        <span></span>
        <label >NO. of Questions <?php echo $total  ?></label>
    </div>
    <!-- <div class="pass">Forgot Password</div> -->

    <button class="butt"><a class="btt1"  href="add.php">ADD QUESTIONS</a></button>
    
    </form>
</div>





</body>
</html>