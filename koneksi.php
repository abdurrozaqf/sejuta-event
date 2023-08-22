<?php
	$host="localhost";
	$user_db="root";
	$pass_db="";
	$db="login_db";

	$con=mysqli_connect ($host,$user_db,$pass_db,$db);

	//check connection
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL:" . mysqli_connect_error();
	}
?>