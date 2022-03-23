<?php 
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);
?>
Hello, <?php echo $user_data['Name']; ?>.

<h1>Instructions</h1>
<h3>All about Bacteria 1</h3>
<p>This is a multiple choice question quiz. Select the correct answer and submit it.</p>

<form method="POST">
<h3>Assesstment 1</h3>
Question 1: Why is bacteria called a microorganism? <br>
    <input type="radio" name="q1" value="a">They are created from a microwave.<br>
    <input type="radio" name="q1" value="b">They are very small and can only be seen under a microscope.<br>
    <input type="radio" name="q1" value="c">They cause micro covid.<br>
<br><br>
Question 2: Bacterias can be classified into<br>
    <input type="radio" name="q2" value="a">2 group<br>
    <input type="radio" name="q2" value="b">3 group<br>
    <input type="radio" name="q2" value="c">5 group<br><!---->
<br><br>
Question 3: A comma-shaped bacteria is called a <br>
    <input type="radio" name="q3" value="a">Spirochaete<br>
    <input type="radio" name="q3" value="b">Vibrio<br><!---->
    <input type="radio" name="q3" value="c">Commaswagger<br>
    <br><br>
Question 4: Choose the wrong statement.<br>
    <input type="radio" name="q4" value="a">All bacterias are bad for your body<br><!---->
    <input type="radio" name="q4" value="b">Bacterias can cause illness,<br>
    <input type="radio" name="q4" value="c">Bacterias can spread.<br>
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


echo "<br>";
if($q1=="b"){
$marks+=25;
$correctans+=1;
}
else{
echo "Question 1: A bacteria is called a microorganism since it is very small(micro) and can only be seen under a microscope.<br>";
}

if($q2=="b"){
$marks+=25;
$correctans+=1;
}
else{
echo "Question 2: Bacterias can be classified into <i>coccus, bacilius and spiral</i><br>";
}

if($q3=="b"){
$marks+=25;
$correctans+=1;
}
else{
echo "Question 3: A comma-shaped bacteria is called a <b>Vibrio</b>.<br>";
}

if($q4=="a"){
$marks+=25;
$correctans+=1;
}
else{
echo "Question 4: Some bacterias are good for your body.<br>";
}
    
echo "<br>Score:".$correctans."/4";
echo "<br>Marks rewarded for this assessment: ".$marks;






$sessions = $_SESSION['studName'];

$query = "UPDATE screcord SET scQuiz2='$marks' WHERE Name = '$sessions'";
mysqli_query($conn, $query);
$query2 = "UPDATE student SET accumulatedMarks= accumulatedMarks + '$marks' WHERE Name = '$sessions'";
mysqli_query($conn, $query2);
echo "<br><a href='homepage.php'>Click here to return to homepage.</a>";




}



?>