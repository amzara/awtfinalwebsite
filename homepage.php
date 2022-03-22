<?php 
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);


?>
<html>
    <head>
        <title>Homepage</title>
    </head>
    <body>     
        <p>Hellopoooooo, <?php echo $_SESSION['studName'];?></p>
        
        Hello, <?php echo $user_data['Name']; ?>.
<p>Nigger</p>
<p>What do you want to do?</a>
<a href="scienceAssessmentSelect.php">Test science assessment</a>






</body>
</html>