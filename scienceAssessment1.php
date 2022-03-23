<?php 
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);
?>
Hello, <?php echo $user_data['Name']; ?>.
<h1>Instructions</h1>
<p>This is a multiple choice question quiz. Select the correct answer and submit it. 
Extra features : Show correct answer for every question + marks after assessment + hide submit button after user complete(so cannot do multiple times)maybe use jquery on button to just make it disappear. </p>


<form method="POST">
Question 1: Why are bacteria's classified as microorganisms?<br>
<select name="sa1q1">
    <option value="a">They exist from your mother's microwaves.</option><br>
    <option value="b">They are super small and can only be seen under a microscope.</option><br>
</select><br>
Question 2: You are:<br>
<select name="sa1q2">
    <option value="a">Gay.</option>
    <option value="b">Straight.</option>
</select><br>
<input type="submit">
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
$marks=0;
$sa1q1=$_POST["sa1q1"];
$sa1q2=$_POST["sa1q2"];

echo $sa1q1;
echo $sa1q2;

if($sa1q1=="b"){
$marks+=50;
}
else{
echo "The correct answer for question 1 is They are super small and can only be seen under a microscope.<br>";
}

if($sa1q2=="b"){
    $marks+=50;
}
    else{
    echo "The correct answer for question 2 is Straight";
    }

echo "Your total score is " . $marks . "% !";

$sessions = $_SESSION['studName'];
echo $sessions;
$query = "UPDATE screcord SET scQuiz1='$marks' WHERE Name = '$sessions'";
mysqli_query($conn, $query);
$query2 = "UPDATE student SET accumulatedMarks= accumulatedMarks + '$marks' WHERE Name = '$sessions'";
mysqli_query($conn, $query2);
echo "<a href='homepage.php'>Click here to return to homepage</a>";




}



?>