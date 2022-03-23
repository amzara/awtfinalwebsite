<?php

session_start();

if(isset($_SESSION['studName']))
{
	unset($_SESSION['studName']);

}

header("Location: studentlogin.php");
die;