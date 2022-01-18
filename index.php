<?php
	include("includes/conexion.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Planeta Animal</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="text" name="user" id="user">
		<input type="password" name="" id="">
		<input type="submit" value="Iniciar">	
	</form>

	 <ul>
		 <a href="agregar.php"><li>Agregar</li></a>
		 <a href="modeficar.php"><li>Modificar</li></a>
		 <a href="eliminar.php"><li>Eliminar</li></a>
	 </ul>
</body>
</html>