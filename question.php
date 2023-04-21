<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
   
    <div class="center">
    <h1>Question Paper</h1>


    <form action="userinfo.php" method="post">


    <div class="text1">
    <input type="number" name="qnumber"value="<?php echo $next; ?>">
        <span></span>
        <label >Question Number</label>
        
    </div>
    <div class="text1">
        <input type="text" name="qtext">
        <span></span>
        <label>Question Text: </label>
    </div>
    <div class="text1">
        <input type="text" name="choice1">
        <span></span>
        <label >Choice 1:</label>
    </div>
    <div class="text1">
        <input type="text" name="choice2">
        <span></span>
        <label >Choice 2:</label>
    </div>

    <div class="text1">
        <input type="text" name="choice3">
        <span></span>
        <label >Choice 3:</label>

    </div>
    <div class="text1">
        <input type="number" name="correct">
        <span></span>
        <label >Correct Option:</label>
    </div>

    
    <button class="butt"><a class="btt1"  href="#">Next Question</a></button> <BR><BR>
    <input type="submit" value="SUBMIT" >  



   
    </form>
</div>





</body>
</html>























