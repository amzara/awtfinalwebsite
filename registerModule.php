<?php 
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);
?>

<html>
    <body>
    <p>Hello, <?php echo $_SESSION['studName'];?></p>
    <?php echo $user_data['Name']; echo $user_data['Password']; ?>  
        <p>Test</p>
        <p> View Lecture Materials</p>
        <p>Attempt Assessments</p>
       
</body>
</html>