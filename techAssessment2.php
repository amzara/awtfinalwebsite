<?php 
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);
?>
Hello, <?php echo $user_data['Name']; ?>.
<h1>Instructions</h1>
<p>This is a Fill In The Blank quiz. Select the correct answer and submit it. 
Extra features : Show correct answer for every question + marks after assessment + hide submit button after user complete(so cannot do multiple times)maybe use jquery on button to just make it disappear. </p>

<form method="POST">
<h3>Assesstment 2</h3>
Question 1: A _____ is used to type.<br>
<input type="text" name="q1">
<br><br>
Question 2: In order to move and select things on the screen, we need to use a _____ <br>
<input type="text" name="q2">
<br><br>
Question 3: A _______ is used to see images of our computer data.<br>
<input type="text" name="q3">
<br><br>
Question 4: In order to record our voice, we need to use a __________<br>
<input type="text" name="q4">
<br><br>
<input type="submit">



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

if($q1=="keyboard"){
$marks+=25;
}
else{
echo "A <b>keyboard<b> is used to type.";
}

if($q2=="mouse"){
$marks+=25;
}
else{
echo "In order to move and select things on the screen, we need to use a <b>mouse<b>";
}

if($q3=="monitor"){
$marks+=25;
}
else{
echo "A <b>monitor</b> is used to see images of our computer data.";
}

if($q4=="microphone"){
$marks+=25;
}
else{
echo "Question 4: In order to record our voice, we need to use a <b>microphone</b>";
}
    
echo "Total marks received is ".$marks;






$sessions = $_SESSION['studName'];
echo $sessions;
$query = "UPDATE techrecord SET techQuiz2='$marks' WHERE Name = '$sessions'";
mysqli_query($conn, $query);
$query2 = "UPDATE student SET accumulatedMarks= accumulatedMarks + '$marks' WHERE Name = '$sessions'";
mysqli_query($conn, $query2);
echo "<a href='homepage.php'>Click here to return to homepage</a>";




}



?>