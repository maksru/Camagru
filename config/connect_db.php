<?php
	include_once "database.php";

	$connect = mysqli_connect(BD_DSN, BD_USER, BD_PASSWORD, BD_NAME);
	if (!$connect)
	{
		die("Connection failed: " . $connect->connect_error);
	}  
?>