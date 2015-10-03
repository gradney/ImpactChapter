<?php
	/**
	 * Simplest way to test database connection is via:
	 * http://www.w3schools.com/php/php_mysql_connect.asp
	 **/
	$dbstr = "Testing simple database connection...\n";
	echo nl2br($dbstr);
	
	// Set database properties.
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	
	// Create connection.
	$conn = new mysqli($servername, $username, $password);
	
	// Check connection.
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully!";
	
	// Close connection.
	mysqli_close($conn);
?>