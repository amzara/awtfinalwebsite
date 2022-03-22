<?php
function check_login($con)
{

	if(isset($_SESSION['studName']))
	{

		$id = $_SESSION['studName'];
		$query = "select * from student where Name = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login


}

?>