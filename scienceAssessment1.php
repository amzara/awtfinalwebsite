<?php 
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);
?>
Hello, <?php echo $user_data['Name']; ?>.

<h1>Instructions</h1>
<h3>Physical Properties of Materials 1</h3>
<p>This is a true/false quiz. Select the correct answer and submit it. 


<form method="POST">
   
    <p>Question 1: Chalk is a strong material.</p>
        <input type="radio" name="q1" value="True">True<br>
        <input type="radio" name="q1" value="False">False<br>
        <p>Question 2: Flexibility is defined as the ability to bend without breaking.</p>
        <input type="radio" name="q2" value="True">True<br>
        <input type="radio" name="q2" value="False">False<br>
        <p>Question 3: Can metal withstand scratches?</p>
        <input type="radio" name="q3" value="True">True<br>
        <input type="radio" name="q3" value="False">False<br>
        <p>Question 1: Buoyancy is defined as the ability to withstand fire.</p>
        <input type="radio" name="q4" value="True">True<br>
        <input type="radio" name="q4" value="False">False<br>
       
    
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
if($q1=="False"){
$marks+=25;
$correctans+=1;
}
else{
echo "Question 1: Chalk is <b>not</b> a strong material since it <b>breaks very easily</b>.<br>";
}

if($q2=="True"){
$marks+=25;
$correctans+=1;
}
else{
echo "Question 2: Flexibility is defined as <b>the ability to bend without breaking<b>.<br>";
}

if($q3=="True"){
$marks+=25;
$correctans+=1;
}
else{
echo "Question 3: Metal is <b>strong</b> and <b>can withstand scratches while maintaining it's look</b>.<br>";
}

if($q4=="False"){
$marks+=25;
$correctans+=1;
}
else{
echo "Question 4: Bouyancy is defined as the <b>ability to float on water.</b><br>";
}
    
echo "<br>Score:".$correctans."/4";
echo "<br>Marks rewarded for this assessment:".$marks;






$sessions = $_SESSION['studName'];

$query = "UPDATE screcord SET scQuiz1='$marks' WHERE Name = '$sessions'";
mysqli_query($conn, $query);
$query2 = "UPDATE student SET accumulatedMarks= accumulatedMarks + '$marks' WHERE Name = '$sessions'";
mysqli_query($conn, $query2);
echo "<br><a href='homepage.php'>Click here to return to homepage.</a>";




}



?>