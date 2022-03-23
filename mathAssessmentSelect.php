<?php 
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);

$sessions = $_SESSION['studName'];
?>


<head>
    <style>

button{
                background-color: #4CAF50;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
                margin-left: 50px;
                margin-right: 15px;
            }

            button:hover{
                background-color: #6ab86e;
            }

    fieldset{
        height: 20%;
        margin-top: 100px;
        margin-left: 200px;
        margin-right: 200px;
        padding-top: 100px;
    }
    a{
        margin-left: 400px;
    }
    </style>
<?php
$sql="SELECT mathQuiz1,mathQuiz2 FROM mathrecord WHERE name='$sessions'";
$result = $conn->query($sql);
echo "<br>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
$quiz1=$row['mathQuiz1'];
$quiz2=$row['mathQuiz2'];
    }
}else {
echo "Does not exist";
}


?>


    <body>
        <fieldset>
            <legend>Choose Your Assessment</legend>
            <?php
            if($quiz1==''){
            echo "<a href='mathAssessment1.php'><button>Addition and Subtraction for Kids</button></a>";
            }else{
                echo "<a href=''><button>Assessment completed</button></a>";
            }
            
            if($quiz2==''){
            echo "<a href='mathAssessment2.php'><button>Multiplication Table</button></a>";
            }else{
            echo "<a href=''><button>Assessment completed</button></a>";
            }
           ?>
            
        </fieldset>
