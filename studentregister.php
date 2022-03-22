<html>
    <head>
        <title>Student Register</title>
        <style>
            .dropbutton {
                background-color: #4CAF50;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }
            .drop{
                position: relative;
                display: inline-block;
            }
            .drop-list {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }
            .drop-list a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .drop-list a:hover {background-color: #f1f1f1}

            .drop:hover .drop-list {
                display: block;
            }

            .drop:hover .dropbutton {
                background-color: #3e8e41;
            }
        </style>
    </head>

    <body>
        <header>
            <div class="drop">
            <button class="dropbutton">Login</button>
            <div class="drop-list">
                <a href="adminlogin.php">Admin Login</a>
                <a href="studentlogin.php">Student Login</a>
            </div>
        </header>

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <?php
            $conn = new mysqli("localhost","root","","myfinal");

            if($conn->connect_error){
                die("Connected failed: ".$conn->connect_error);
            }

            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['password'];

                $sql = "INSERT INTO student(Name, Email, Password) VALUES('$name','$email','$pass')";
                $sql2 = "INSERT INTO screcord(Name) VALUES('$name')";

                if($conn->query($sql)==TRUE){
                    header('location:studentlogin.php');
                    echo "<script>alert('Register successful')</script>";
                }
                else{
                    echo "Error: ".$sql. "<br>" .$conn->error;
                }
                if($conn->query($sql2)==TRUE){
                    header('location:studentlogin.php');
                    echo "<script>alert('Register successful')</script>";
                }
                else{
                    echo "Error: ".$sql. "<br>" .$conn->error;
                }

                $conn->close();
            }
        ?>

        <fieldset>Register </legend>
            <label>Name: </label>
            <input type="text" id="name" name="name" required placeholder="Enter Your Name"><br><br>
            <label>Email: </label>
            <input type="text" id="email" name="email" required placeholder="Enter Your Email"><br><br>
            <label>Password: </label>
            <input type="password" id="password" name="password" required placeholder="Enter Your Password"><br><br>
            <input type="submit" value="Register">
        </fieldset>
    </body>
</html>
