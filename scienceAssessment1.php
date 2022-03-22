<?php 
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);
?>

<h1>Instructions</h1>
<p>This is a multiple choice question quiz. Select the correct answer and submit it. 
Extra features : Show correct answer for every question + marks after assessment </p>

<form method="POST">
Question 1: Why are bacteria's classified as microorganisms?<br>
<select name="sa1q1">
    <option value="a">They exist from your mother's microwaves.</option><br>
    <option value="b">They are super small and can only be seen under a microscope.</option><br>
</select><br>
Question 2: You are:<br>
<select name="sa1q2">
    <option value="a">Gay.</option>
    <option value="b">Ill.</option>
</select><br>
<input type="submit">
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
$sa1q1=$_POST["sa1q1"];
$sa1q2=$_POST["sa1q2"];

echo $sa1q1;
echo $sa1q2;


}