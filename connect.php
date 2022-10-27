<?php

$servername = "localhost";
$username = "root";
$password = "Saurabhsahu-7412";

try {
	$conn = new PDO(
		"mysql:host=$servername;dbname=CAR_RENTAL",
		$username, $password);

	// Set the PDO error mode
	// to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE,
				PDO::ERRMODE_EXCEPTION);

	echo "Connected successfully";
} catch(PDOException $e) {
	echo "Connection failed: "
		. $e->getMessage();
}
?>
