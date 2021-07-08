<?php


include('database/dbconfig.php');

	if(isset($_SESSION['user']))
	{

		$id = $_SESSION['user'];
		$query = "select * from form where username = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}


	//redirect to login
	header("Location: index.php");
	die;

}
