<?php 
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);
$sessions = $_SESSION['studName'];
echo $sessions;
?>

<?php
$query = "SELECT Name, accumulatedMarks FROM student WHERE accumulatedMarks!=0 ORDER BY accumulatedMarks DESC";
$result = $conn->query($query);
$ranking=1;

if ($result->num_rows > 0) {

    echo "<table border=1 style='width:60%;border-collapse:collapse;'> 
		<tr>
        <th>Rank</th>
		<th>Name</th>
		<th>AccumulatedMarks</th>
		
		
		</tr>";


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo  "<td>".$ranking;
		
        echo "<td>" .$row['Name']. "</td>";
		echo "<td>" .$row['accumulatedMarks']. "</td>";
		$ranking++;
		
		echo "</tr>";
    }
    echo "</table>";
} 

else {
    echo "0 results";
}

echo "<br><br><br>Nigger";
$query2="SELECT scQuiz1,scQuiz2 FROM screcord WHERE Name='$sessions'";
$result = $conn->query($query2);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$scQuiz1=$row["scQuiz1"];
$scQuiz2=$row["scQuiz2"];
}
} else {
    echo "0 results";
}
$query3="SELECT mathQuiz1,mathQuiz2 FROM mathrecord WHERE Name='$sessions'";
$result = $conn->query($query3);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$mathQuiz1=$row["mathQuiz1"];
$mathQuiz2=$row["mathQuiz2"];
}
} else {
    echo "0 results";
}
$query3="SELECT techQuiz1,techQuiz2 FROM techrecord WHERE Name='$sessions'";
$result = $conn->query($query3);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$techQuiz1=$row["techQuiz1"];
$techQuiz2=$row["techQuiz2"];
}
} else {
    echo "0 results";
}
$query4="SELECT engQuiz1,engQuiz2 FROM engrecord WHERE Name='$sessions'";
$result = $conn->query($query4);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$engQuiz1=$row["engQuiz1"];
$engQuiz2=$row["engQuiz2"];
}
} else {
    echo "0 results";
}

echo "<table border=1 style='width:60%;border-collapse:collapse;'><tr><th>Assessment Name</th><th>Marks</th></tr>";
if($scQuiz1!=''){
    echo "<tr><td>Name of Science Quiz 1</td><td>".$scQuiz1."</td></tr>";}
    if($scQuiz2!=''){
        echo "<tr><td>Name of Science Quiz 2</td><td>".$scQuiz2."</td></tr>";}
        if($mathQuiz1!=''){
            echo "<tr><td>Name of Math Quiz 1</td><td>".$mathQuiz1."</td></tr>";}
            if($mathQuiz2!=''){
                echo "<tr><td>Name of Math Quiz 2</td><td>".$mathQuiz2."</td></tr>";}
                if($techQuiz1!=''){
                    echo "<tr><td>Name of Technology Quiz 1</td><td>".$techQuiz1."</td></tr>";}
                    if($techQuiz2!=''){
                        echo "<tr><td>Name of Technology Quiz 2</td><td>".$techQuiz2."</td></tr>";}
                        if($engQuiz1!=''){
                            echo "<tr><td>Name of Engineering Quiz 1</td><td>".$engQuiz1."</td></tr>";}
                            if($engQuiz1!=''){
                                echo "<tr><td>Name of Engineering Quiz 2</td><td>".$engQuiz2."</td></tr>";}


/*    echo "sc quiz 2 is".$scQuiz2."<br>";
echo "tech quiz 1 is".$techQuiz1."<br>";
echo "tech quiz 2 is".$techQuiz2."<br>";
echo "math quiz 1 is".$mathQuiz1."<br>";
echo "math quiz 2 is".$mathQuiz2."<br>";
echo "eng quiz 1 is".$engQuiz1."<br>";
echo "eng quiz 2 is".$engQuiz2."<br>";
*/
echo "</table>"







?>