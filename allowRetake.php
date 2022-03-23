<?php 
include("connection.php");
?>
<head>
    <style>
        input[type="submit"], input[type="reset"]{
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            margin-left:10px;
        }
        input[type="submit"]:hover, input[type="reset"]:hover{
            background-color: #6ab86e;
        }
    </style>
</head>
<form method="POST">
<fieldset>
    <legend>Edit Account</legend>
    <label>Account Name: </label><br>
    <input type="text" name="name" placeholder="Enter Account Name"><br><br>
    <label>Enter Assessment Name: </label><br>
    <input type="text" name="subject" placeholder="Enter Assessment Name" onkeyup="hint(this.value)"><br><br>
  
    <input type="submit" value="Edit"><input type="reset">
    <p>Suggestion: <span id='hint'></span></p>
    <p>Details: Make sure to enter assessment name correctly as provide to ensure proper match. </p>
    </fieldset>
    <?php 
    if(isset($status)){
     echo $status;
    }
     ?> 
    <script>
            function hint(str){
                if(str.length==0){
                    document.getElementById('hint').innerHTML="";
                    return;
                }
                else{
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function(){
                        if(this.readyState==4 && this.status==200){
                            document.getElementById('hint').innerHTML = this.responseText;
                        }
                    }
                    xmlhttp.open("GET","subject.php?q="+str,true);
                    xmlhttp.send();
                }
            }
        </script>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $check=0;
        $name = $_POST['name'];
        $subject = $_POST['subject'];

        echo $name;
        echo $subject;
      

        
        $sql="SELECT Name FROM student WHERE name='$name'";
        $result = $conn->query($sql);
        
        echo "<br>";
        if ($result->num_rows > 0) {
        echo " Name Exist<br>";
        $check++;
        } else {
            echo "Name does not exist";
        }

       if($subject=='Physical Properties of Materials 1'||$subject=='All About Bacteria 1'||$subject=='Addition and Subtraction for Kids'||
       $subject=='Multiplication Table'||$subject=='What is an Engineer'||$subject=='Jessi Has a Problem'||$subject=='Technology for Kids 1'||$subject=='Technology for Kids 2')
       {
           echo "Subject name exist";
           $check++;
       }else{
        echo "Subject name does not exist";
       }

     

       if($check==2){
        if($subject=='Physical Properties of Materials 1'){
            $sql2="UPDATE screcord SET scQuiz1='' WHERE Name='$name'";
            mysqli_query($conn, $sql2);
        }
        if($subject=='All About Bacteria 1'){
            $sql2="UPDATE screcord SET scQuiz2='' WHERE Name='$name'";
            mysqli_query($conn, $sql2);
        }
        if($subject=='Addition and Subtraction for Kids'){
            $sql2="UPDATE mathrecord SET mathQuiz1='' WHERE Name='$name'";
            mysqli_query($conn, $sql2);
        }
        if($subject=='Multiplication Table'){
            $sql2="UPDATE mathrecord SET mathQuiz2='' WHERE Name='$name'";
            mysqli_query($conn, $sql2);
        }
        if($subject=='What is an Engineer'){
            $sql2="UPDATE engrecord SET engQuiz1='' WHERE Name='$name'";
            mysqli_query($conn, $sql2);
        }
        if($subject=='Jessi Has a Problem'){
            $sql2="UPDATE engrecord SET engQuiz2='' WHERE Name='$name'";
            mysqli_query($conn, $sql2);
        }
        if($subject=='Technology for Kids 1'){
            $sql2="UPDATE techrecord SET techQuiz1='' WHERE Name='$name'";
            mysqli_query($conn, $sql2);
        }
        if($subject=='Technology for Kids 2'){
            $sql2="UPDATE techrecord SET techQuiz2='' WHERE Name='$name'";
            mysqli_query($conn, $sql2);
        }
        

       }else{
           
            echo "Condition not satisfied for POST";
            echo $check;
        
       }



        
    }
?>