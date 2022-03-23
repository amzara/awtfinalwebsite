<?php 
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);


?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<html>
 <head>
 <style>
            div{
                border: 2px solid;
                background-color: #b1e6b3;
                width: 30%;
                margin-left: 200px;
                margin-top: 10px;
                padding-bottom:30px;
                float:left;
                border: none;
            }
            img{
                height:200px;
                width: 200px;
            }
            body a{
                text-decoration: none;
            }

            #test{
                text-decoration: none;
                float:right;
            }
            h1{
                font-size: 60px;
                color: purple;
                cursor: pointer;
            }
            body{
                background: linear-gradient(to bottom right, #99ccff 0%, #0066ff 100%);
            }
            button{
                background-color: #4CAF50;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
                margin-left: 15px;
                margin-right: 15px;
            }
            button:hover{
                background-color: #6ab86e;
            }
            p{
                font-size: 20px;
            }
            #test{
                background-color: yellow    ;
                color: black;
               
                margin-left:50%;
            }
            #logout{
                float:right;
            }

            fieldset{
            position:relative;  
            margin-top:45%;
            }

        </style>
        <title>Homepage</title>

    </head>

    <?php
if($user_data['disable']==1){
    echo '<script language="javascript">';
    echo 'alert("Your acc has been disabled by the administrator.")';
    echo '</script>';
    header( "refresh:0.3;url=logout.php" );
    
}
?>


    <body>     
        <nav>
        <a href="homepage.php"><img src="https://cdn.discordapp.com/attachments/812185424012247042/956073818479271976/cooltext407111482342161.png" alt="STEM Interactive Club" style="width:40%"></a>
        <button id="logout" style="margin-left:600px;">Logout</button>
        </nav>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
     <script>
$(document).ready(function(){
  $("#test").click(function(){
    window.location.replace('marks.php');
  });
  $("#logout").click(function(){
    window.location.replace('logout.php');
  });
});
</script>

        
        <p>Logged in as user <?php echo $_SESSION['studName'];?></p>
        
        <div>
            <center><p>Science</p>
            <img src="https://i.pinimg.com/originals/36/f8/5e/36f85eee6721426241832571fae381ac.png" alt="science"><br><br>
            <a href="learnsc.php"><button>Learn</button></a>
            <a href="scienceAssessmentSelect.php"><button>Quiz</button></a></center>
        </div>
        <div>
            <center><p>Math</p>
            <img src="https://image.shutterstock.com/image-vector/creative-hand-drawn-vector-maths-260nw-461142283.jpg" alt="math"><br><br>
            <a href="learnmath.php"><button>Learn</button></a>
            <a href="mathAssessmentSelect.php"><button>Quiz</button></a></center>
        </div>
        <div>
            <center><p>Technology</p>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMA4h6SjRx5IbA44MDnq3OkETL-xyQI52hbg&usqp=CAU" alt="tech"><br><br>
            <a href="learntech.php"><button>Learn</button></a>
            <a href="techAssessmentSelect.php"><button>Quiz</button></a></center>
        </div>
        <div>
            <center><p>Engineering</p>
            <img src="https://c8.alamy.com/comp/2AXJCMK/backgrounds-of-engineering-subjects-technical-illustration-mechanical-engineering-blue-background-points-2AXJCMK.jpg" alt="engineer"><br><br>
            <a href="learnengineer.php"><button>Learn</button></a>
            <a href="engAssessmentSelect.php"><button>Quiz</button></a></center>
        </div>
<br><br>
        <button id="test" style="margin-top: 30px; margin-right: 500px; width: 500px;">Marks</button>


<p id="quotetext"></p>
<p id="quoteauthor"></p>

<script type="text/javascript">
 
    
   var quote;
   var author;
    var settings = {
                    "url": `https://inspiring-quotes.p.rapidapi.com/random`,
                    "method": "GET",
                    "timeout": 0,
                    "async":false,
                         
                    
                    "headers": {
                    "x-rapidapi-host": "inspiring-quotes.p.rapidapi.com",
                      "x-rapidapi-key": "39dc5092cfmsh6d681f0d9f7e41dp1efdeejsn5e2fc15ff323"
                    },
                  };
                  
                  $.ajax(settings).done(function (response) {
                    console.log(response);
                    quote = response.quote;
                    author= response.author;

                    
                   
                   
                  });

                    
                    console.log("testing document.writennn");
                  console.log(quote);
                  console.log(author);

                  document.getElementById("quotetext").innerHTML = quote;
                  document.getElementById("quoteauthor").innerHTML = author;
             
	
         
  
</script>






    </body>
</html>


