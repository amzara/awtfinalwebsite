<?php 
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);
$sessions = $_SESSION['studName'];
?>
Hello, <?php echo $user_data['Name']; ?>.
<h1>Instructions</h1>
<h3>Technology for Kids 1</h3>
<p>This is a multiple choice question quiz. Select the correct answer and submit it. 
Extra features : Show correct answer for every question + marks after assessment + hide submit button after user complete(so cannot do multiple times)maybe use jquery on button to just make it disappear. </p>

<form method="POST">

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
</form>
<?php
$sql="SELECT techQuiz1 FROM techrecord WHERE Name='$sessions'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$techQuiz1=$row["techQuiz1"];
}
} 

    



if($techQuiz1==""){
echo "
<input type='submit'>";
}
?>

</form>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $correctans=0;
    $marks=0;
$q1=$_POST["q1"];
$q2=$_POST["q2"];
$q3=$_POST["q3"];
$q4=$_POST["q4"];



if($q1=="a"){
$marks+=25;
$correctans+=1;
}
else{
echo "The correct answer for question 1 is a monitor.<br>";
}

if($q2=="c"){
$marks+=25;
$correctans+=1;
}
else{
echo "The correct answer for question 2 is a keyboard<br>";
}

if($q3=="b"){
$marks+=25;
$correctans+=1;
}
else{
echo "The correct answer for question 3 is a microphone.<br>";
}

if($q4=="a"){
$marks+=25;
$correctans+=1;
}
else{
echo "The correct answer for question 4 is a printer<br>";
}
echo "<br>Score:".$correctans."/4";
echo "Total marks received is ".$marks;








$query = "UPDATE techrecord SET techQuiz1='$marks' WHERE Name = '$sessions'";
mysqli_query($conn, $query);
$query2 = "UPDATE student SET accumulatedMarks= accumulatedMarks + '$marks' WHERE Name = '$sessions'";
mysqli_query($conn, $query2);

echo "<a href='homepage.php'>Click here to return to homepage</a>";




}



?>