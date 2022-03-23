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
Question 1: Which hardware allows us to see images in computer data <br>
    <input type="radio" name="q1" value="a">Monitor<br><!---->
    <input type="radio" name="q1" value="b">Mouse<br>
    <input type="radio" name="q1" value="c">Speaker<br>
<br><br>
Question 2: Which hardware we use to type<br>
    <input type="radio" name="q2" value="a">Monitor<br>
    <input type="radio" name="q2" value="b">Mouse<br>
    <input type="radio" name="q2" value="c">Keyboard<br><!---->
<br><br>
Question 3: Which hardware us use to record our voice so others can hear<br>
    <input type="radio" name="q3" value="a">Mouse<br>
    <input type="radio" name="q3" value="b">Microphone<br><!---->
    <input type="radio" name="q3" value="c">Speaker<br>
    <br><br>
Question 4: Which hardware us use to put iamges, texts from the computer on paper<br>
    <input type="radio" name="q4" value="a">Printer<br><!---->
    <input type="radio" name="q4" value="b">Mouse<br>
    <input type="radio" name="q4" value="c">Speaker<br>
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

if($q1=="a"){
$marks+=25;
}
else{
echo "The correct answer for question 1 is a monitor.";
}

if($q2=="c"){
$marks+=25;
}
else{
echo "The correct answer for question 2 is a keyboard";
}

if($q3=="b"){
$marks+=25;
}
else{
echo "The correct answer for question 3 is a microphone.";
}

if($q4=="a"){
$marks+=25;
}
else{
echo "The correct answer for question 4 is a printer";
}
    
echo "Total marks received is ".$marks;






$sessions = $_SESSION['studName'];
echo $sessions;
$query = "UPDATE techrecord SET techQuiz1='$marks' WHERE Name = '$sessions'";
mysqli_query($conn, $query);
$query2 = "UPDATE student SET accumulatedMarks= accumulatedMarks + '$marks' WHERE Name = '$sessions'";
mysqli_query($conn, $query2);
echo "<a href='homepage.php'>Click here to return to homepage</a>";




}



?>