<?php

	$servername = "182.50.131.14";//"localhost";
	$username = "mtastudDB1";//"root";
	$password = "mtastudDB1!";//"root";
	$dbname = "mtastudDB1";//"shaming";
	$servername = "localhost";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	$conn->set_charset("utf8");
	// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 
?>