<?php 
include("connection.php");
?>
<head>
    <style>
        label, input[type="text"]{
            margin-left: 20px;
            margin-top: 10px;
        }
        input[type="submit"], input[type="reset"]{
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            margin-left:20px;
            margin-bottom: 30px;
        }
        input[type="submit"]:hover, input[type="reset"]:hover{
            background-color: #6ab86e;
        }
    </style>
</head>
<form method="POST">
<fieldset>
    <legend>Disable Account</legend>
    <label>Account Name: </label><br>
    <input type="text" name="name" placeholder="Enter Account Name"><br><br>

    <input type="submit" value="Delete"><input type="reset">
    <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $name = $_POST['name'];

            $sql = "UPDATE student SET disable=1 where Name='$name'";
         

            if(($conn->query($sql)==TRUE)){
                header('location:adminpage.php');
            }
            else{
                echo "alert('Error!')";
            }
        }