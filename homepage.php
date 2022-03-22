<?php 
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);

?>
<html>
 <head>
 <style>
            div{
                border: 2px solid;
                background-color: green;
                width: 30%;
                margin-left: 100px;
                margin-top: 20px;
                padding-bottom:10px;
                float:left;
            }
            img{
                height:200px;
                width: 200px;
            }
            body a{
                text-decoration: none;
            }
            nav{
                background-color: black;
            }
        </style>
        <title>Homepage</title>
    </head>
    <body>     
        <nav>
            <a href="" style="text-decoration: none; float:right"><button>Marks</button></a>
        </nav>
        <br>
        <p>Hello, <?php echo $_SESSION['studName'];?></p>

        <div>
            <center><p>Science</p>
            <img src="https://image.shutterstock.com/image-vector/creative-hand-drawn-vector-maths-260nw-461142283.jpg" alt="math"><br><br>
            <a href=""><button>Learn</button></a>
            <a href="scienceAssessmentSelect.php"><button>Quiz</button></a></center>
        </div>
        <div>
            <center><p>Math</p>
            <img src="https://image.shutterstock.com/image-vector/creative-hand-drawn-vector-maths-260nw-461142283.jpg" alt="math"><br><br>
            <a href=""><button>Learn</button></a>
            <a href=""><button>Quiz</button></a></center>
        </div>
        <div>
            <center><p>Technology</p>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMA4h6SjRx5IbA44MDnq3OkETL-xyQI52hbg&usqp=CAU" alt="tech"><br><br>
            <a href=""><button>Learn</button></a>
            <a href=""><button>Quiz</button></a></center>
        </div>
        <div>
            <center><p>Engineering</p>
            <img src="https://c8.alamy.com/comp/2AXJCMK/backgrounds-of-engineering-subjects-technical-illustration-mechanical-engineering-blue-background-points-2AXJCMK.jpg" alt="engineer"><br><br>
            <a href=""><button>Learn</button></a>
            <a href=""><button>Quiz</button></a></center>
        </div>
    </body>
</html>


