<html>
	<head>
		<title>Update 4</title>
		<meta charset="UTF-8" />
		<link rel ="stylesheet" href="consulta.css">
		<title>Actualizar nombres</title>
	</head>
	<body>
		<form action="actualizar5.php" method="post">
			<select name="nombreOriginal">
			<?php
				include 'conexion2.php';
				$consulta = $conexion2 -> query ("SELECT nombre FROM compania ORDER BY nombre ASC") or die ("Ha fallado la conexión");
					while ( $registro = $consulta -> fetch_assoc()) {
						echo'<option>'.$registro['nombre'].'</option>';
					}
			?>
			</select>
			<input type="text" name="nuevoNombre" /><br/>
			<input type="submit" value="Cambiar!!" />
		</form>
	</body>
	<br>
	<a href="consulta2.php">Regresar</a><br>
</html>
