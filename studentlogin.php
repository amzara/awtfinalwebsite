<?php 
session_start();
include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
		//something was posted
		$user_name = $_POST['studName'];
		$password = $_POST['studPass'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from student where Name = '$user_name' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['Password'] === $password)
					{

						$_SESSION['studName'] = $user_data['Name'];
						header("Location: homepage.php");
						die;
					}
				}
			}
			
			echo '<script>alert("Wrong username/password!")</script>';
		}else
		{
			echo '<script>alert("Username/password combination does not exist!")</script>';
		}
	}

?>

<html>
    <header>
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

        <div class="drop">
        <button class="dropbutton">Login</button>
        <div class="drop-list">
            <a href="adminlogin.php">Admin Login</a>
            <a href="studentlogin.php">Student Login</a>
        </div>
    </header>

    <body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <fieldset>
            <legend>Student Login</legend>
            <label>Student name: </label>
            <input type="text" id="studName" name="studName" required placeholder="Enter Your Name">
            <br><br>
            <label>Password: </label>
            <input type="password" id="studPass" name="studPass" required placeholder="Enter Your Password">
            <br><br>
            <input type="submit" value="Login" >
            <input type="reset" value="Reset">
            <input type="button" value="Register" onclick="window.location.href='studentregister.php'">
        </fieldset> 
    </body>
</html>


