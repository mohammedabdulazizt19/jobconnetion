<?php
	$con = mysqli_connect("localhost","urafnghd_root","reniertrenuela9","urafnghd_jobscon");

	if(mysqli_connect_errno()){

		echo "Failed to connect to MYSQL: " . mysqli_connect_error();
		
	}
?>