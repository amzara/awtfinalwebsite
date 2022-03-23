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
    <h3>Assesstment 1</h3>
    <p>Question 1: 4 + 6</p>
        <input type="radio" name="q1" value="a">12<br>
        <input type="radio" name="q1" value="b">13<br>
        <input type="radio" name="q1" value="c">10<br>
    <p>Question 2: 150 + 130</p>
        <input type="radio" name="q2" value="a">220<br>
        <input type="radio" name="q2" value="b">280<br><!---->
        <input type="radio" name="q2" value="c">230<br>
    <p>Question 3: 3 x 2</p>
        <input type="radio" name="q3" value="a">6<br>
        <input type="radio" name="q3" value="b">7<br>
        <input type="radio" name="q3" value="c">5<br><br>
    <p>Question 4: 11 x 12</p>
        <input type="radio" name="q4" value="a">150<br>
        <input type="radio" name="q4" value="b">121<br>
        <input type="radio" name="q4" value="c">132<br><br>
 
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

if($q1=="c"){
$marks+=25;
}
else{
echo "The correct answer for question 1 is 10";
}

if($q2=="b"){
$marks+=25;
}
else{
echo "The correct answer for question 2 is 280";
}

if($q3=="a"){
$marks+=25;
}
else{
echo "The correct answer for question 3 is 6";
}

if($q4=="c"){
$marks+=25;
}
else{
echo "The correct answer for question 4 is 132";
}
    







$sessions = $_SESSION['studName'];
echo $sessions;
$query = "UPDATE mathrecord SET mathQuiz1='$marks' WHERE Name = '$sessions'";
mysqli_query($conn, $query);
$query2 = "UPDATE student SET accumulatedMarks= accumulatedMarks + '$marks' WHERE Name = '$sessions'";
mysqli_query($conn, $query2);
echo "<a href='homepage.php'>Click here to return to homepage</a>";




}



?>