<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "planeta_animal";

	$conn = new mysqli($server, $user, $pass, $db);
	if ($conn->connect_error) {
		die("Conexión fallida: " . $conn->connect_error);
	}else{
		echo "Conexión exitosa";
	}
?>