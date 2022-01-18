<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Agregar Usuario</title>
</head>

<body>
	<div class="container">
		<div class="title">
			<h3>Agregar Usuario</h3>
			<a href="index.php"><h4>Regresar</h4></a>
			<?php
				if (isset($_GET['crear'])) {
					if ($_GET['crear'] == 'exito') {
						echo "<p>Usuario agregado exitosamente</p>";
					}else{
						echo "<p>Error al agregar usuario</p>";
					}
				}
			?>
		</div>
		<div class="form">
			<form action="includes/agregar_user.php" method="POST" enctype="multipart/form">
				<div class="inputs">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" placeholder="Juan Perez" id="nombre">
				</div>
				<div class="inputs">
					<label for="username">Usuario</label>
					<input type="text" name="username" placeholder="jperez" id="username">
				</div>
				<div class="inputs">
					<label for="identidad">Identidad</label>
					<input type="number" name="identidad" placeholder="0801198907280" id="identidad">
				</div>
				<div class="inputs">
					<label for="email">Correo Electrónico</label>
					<input type="email" name="email" placeholder="jperez@gmail.com" id="email">
				</div>
				<div class="inputs">
					<label for="telefono">Teléfono</label>
					<input type="tel" name="telefono" placeholder="94500123" id="telefono">
				</div>
				<div class="inputs">
					<label for="direccion">Dirección</label>
					<input type="text" name="direccion" placeholder="Col. Juan Lindo" id="direccion">
				</div>
				<div class="inputs">
					<label for="password">Contraseña</label>
					<input type="password" name="password" placeholder="Col. Juan Lindo" id="direccion">
				</div>
				<div class="inputs">
					<input type="hidden" name="crear">
					<input type="submit" value="Registrar">
				</div>
			</form>
		</div>
	</div>
</body>

</html>