<?php 
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);
$sessions = $_SESSION['studName'];
echo $sessions;
echo $user_data['Name'];
?>

<?php 
$sql="SELECT scQuiz1,scQuiz2,scQuiz3 FROM screcord WHERE Name='$sessions'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $scQuiz1=$row['scQuiz1'];
        $scQuiz2=$row['scQuiz2'];
        $scQuiz3=$row['scQuiz3'];
 
        
     

    }
}

 echo $scQuiz1;   
 echo $scQuiz2;   
 echo $scQuiz3;   

?>

<p> Choose from the list of assessments below to perform </p>
<?php
echo $scQuiz1;
if($scQuiz1==""){
echo "<a href='scienceAssessment1.php'>(MCQ) Quiz 1 : Bacteria's for Primary School </a>";    
}
?>   


<p> Completed Assesments</p>
<?php 
if($scQuiz1!=""){
echo "(MCQ) Quiz 1 : Bacteria's for Primary School </a>" .$scQuiz1;    
}
?>
