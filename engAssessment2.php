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
    <h3>Assesstment 2</h3>
    <p>Question 1: Engineering is the person who makes something that solves a problem</p>
        <input type="radio" name="q1" value="True">True<br><!---->
        <input type="radio" name="q1" value="False">False<br>
        <br>
    Question 2: How does engineer find a solution to a problem</p>
        <input type="radio" name="q2" value="True">Make a bunch of guesses<br>
        <input type="radio" name="q2" value="False">Follow a series of steps to come up with the best solution<br><!---->
        <br>
    Question 3: The steps to come up with a best possible solution is :<br>
    ask, image, create and improve<br>
        <input type="radio" name="q3" value="True">True<br><!---->
        <input type="radio" name="q3" value="False">False<br>
        <br>
    Question 4: Asking means to simply asking question about the problem <br>
        <input type="radio" name="q4" value="True">True<br><!---->
        <input type="radio" name="q4" value="False">False<br>
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

if($q1=="True"){
$marks+=25;
}
else{
echo "The statement 'Engineering is the person who makes something that solves a problem' is true.";
}

if($q2=="False"){
$marks+=25;
}
else{
echo "Engineers follow a series of steps to come up with the best solution";
}

if($q3=="True"){
$marks+=25;
}
else{
echo "In order to come up with a best possible solution, it is necessary to ask, image, create and improve.";
}

if($q4=="True"){
$marks+=25;
}
else{
echo "The statement is correct. Asking is to ask questions related to the problem";
}
    
echo "Total marks received is ".$marks;






$sessions = $_SESSION['studName'];
echo $sessions;
$query = "UPDATE engrecord SET engQuiz2='$marks' WHERE Name = '$sessions'";
mysqli_query($conn, $query);
$query2 = "UPDATE student SET accumulatedMarks= accumulatedMarks + '$marks' WHERE Name = '$sessions'";
mysqli_query($conn, $query2);
echo "<a href='homepage.php'>Click here to return to homepage</a>";




}



?>