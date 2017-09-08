<?php

	define('servername', getenv('OPENSHIFT_MYSQL_DB_HOST'));
	$username = "adminWTIpJL9";
	$password = "aABu1hdWnb_4";
	$dbname = "epilenWheel";

	$conn = new mysqli($servername, $username, $password, $dbname);


	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
		$error = "Connection error";
	}
	else{
		
	}

?>