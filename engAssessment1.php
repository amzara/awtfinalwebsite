<?php 
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);
?>
Hello, <?php echo $user_data['Name']; ?>.
<h1>Instructions</h1>
<p>This is a multiple choice question quiz. Select the correct answer and submit it. 

<form method="POST">
<h3>Assesstment 1</h3>
<p>Question 1: Define Engineer</p>
 <select name="q1">
<option value="a">someone who wants to know how and why things work</option><br>
 <option value="b">a person who desgins and build things to solve specific problems</option><br>
 <option value="c">Both</option><br><!--c-->
</select>
<br><br>
<p>Question 2: Engineer have to ask themselves three important question which is:<br>
 1)what is the problem that need to be solved.<br>
 2)who has the problem that needs to be solved<br>
3)why is the problem important to solved<br></p>
<input type="radio" name="q2" value="True">True<br><!--C-->
 <input type="radio" name="q2" value="False">False<br>
    <br><br>
    Question 3: Is the Golden Gate Bridge in San Francisco, California an example of engineering: <br>
        <input type="radio" name="q3" value="True">True<br><!--C-->
        <input type="radio" name="q3" value="False">False<br>
    <br><br>
    Question 4: What does the civil engineer builds?<br>
    <select name="q4">
        <option value="a">Buildings<br>
        <option value="b">Roads<br>
        <option value="c">Bridges<br>
        <option value="d">All above<br><!---->
</select>
    <br><br>    
    <input type="submit">
</form>


<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $correctans=0;
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
$correctans+=1;
}
else{
echo "Question 1: Both statements are correct.<br>";
}

if($q2=="True"){
$marks+=25;
$correctans+=1;
}
else{
echo "Question 2: All three statement is correct<br>";
}

if($q3=="True"){
$marks+=25;
$correctans+=1;
}
else{
echo "Question 3: Golden Gate is indeed an example of engineering.<br>";
}

if($q4=="d"){
$marks+=25;
$correctans+=1;
}
else{
echo "Question 4: Civil Engineer indeed builds all of the above.<br>";
}
    
echo "<br>Score:".$correctans."/4";
echo "<br>Marks rewarded for this assessment:".$marks;






$sessions = $_SESSION['studName'];
echo $sessions;
$query = "UPDATE engrecord SET engQuiz1='$marks' WHERE Name = '$sessions'";
mysqli_query($conn, $query);
$query2 = "UPDATE student SET accumulatedMarks= accumulatedMarks + '$marks' WHERE Name = '$sessions'";
mysqli_query($conn, $query2);
echo "<br><a href='homepage.php'>Click here to return to homepage</a>";




}



?>