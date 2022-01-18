<?php
	if (isset($_POST['crear'])) {
		$nombre = $_POST['nombre'];
		$username = $_POST['username'];
		$identidad = $_POST['identidad'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];
		$direccion = $_POST['direccion'];
		$password = $_POST['password'];

		include 'conexion.php';

		$sql = "INSERT INTO users (nombre, username, identidad, email, telefono, direccion, contrasena) VALUES ('$nombre', '$username', '$identidad', '$email', '$telefono', '$direccion', '$password')";

		$result = $conn->query($sql);
		if ($result) {
			header('Location: ../agregar.php?crear=exito');
		} else {
			header('Location: ../agregar.php?crear=error');
			echo "Error al agregar usuario";
			die("Error al insertar datos".$conn->error);
		}


	}else{
		echo "Restringido!!";
	}
?>