<?php 
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);
?>
Hello, <?php echo $user_data['Name']; ?>.
<h1>Instructions</h1>
<p>Fill in the answer. Select the correct answer and submit it. 
Extra features : Show correct answer for every question + marks after assessment + hide submit button after user complete(so cannot do multiple times)maybe use jquery on button to just make it disappear. </p>

<h3>Assesstment 2</h3>
<form method="POST">
    <label>Question 1: 15 + 16 = </label><br>
    <input type="number" name="q1">
    <br><br>
    <label>Question 2: 19 - 15 = </label><br>
    <input type="number" name="q2">
    <br><br>
    <label>Question 3: 5 x 9 = </label><br>
    <input type="number" name="q3">
    <br><br>
    <label>Question 4: 12 / 4 = </label><br>
    <input type="number" name="q4">
    <br><br>
    <input type="submit">
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
$marks=0;
$q1=$_POST["q1"];
$q2=$_POST["q2"];
$q3=$_POST["q3"];
$q4=$_POST["q4"];

echo $q1;
echo $q2;
echo $q3;
echo $q4;

if($q1==31){
$marks+=25;
}
else{
echo "The correct answer for question 1 is 31";
}

if($q2==4){
$marks+=25;
}
else{
echo "The correct answer for question 2 is 280";
}

if($q3=="45"){
$marks+=25;
}
else{
echo "The correct answer for question 3 is 45";
}

if($q4=="3"){
$marks+=25;
}
else{
echo "The correct answer for question 4 is 3";
}
    
echo "Total marks received is ".$marks;






$sessions = $_SESSION['studName'];
echo $sessions;
$query = "UPDATE mathrecord SET mathQuiz2='$marks' WHERE Name = '$sessions'";
mysqli_query($conn, $query);
$query2 = "UPDATE student SET accumulatedMarks= accumulatedMarks + '$marks' WHERE Name = '$sessions'";
mysqli_query($conn, $query2);
echo "<a href='homepage.php'>Click here to return to homepage</a>";




}



?>