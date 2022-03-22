<?php 
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);
?>

<p> Choose from the list of assessments below to perform </p>
<a href="scienceAssessment1.php">(MCQ) Quiz 1 : Bacteria's for Primary School </a>
    


<p> Completed Assesments </p>
<?php // find a way to show assessments that are done here and unhide from top also ?> 