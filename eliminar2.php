<html>
	<head>
		<title>Ejercicio - DELETE</title>
		<meta charset="UTF-8" />
		<link rel ="stylesheet" href="consulta.css">
	</head>
	<body>
		<form action="eliminar3.php" method="post">
			<select name="nombreOriginal">
			<?php
				include 'conexion2.php';
				$consulta = $conexion2 -> query ("SELECT nombre FROM compania ORDER BY nombre ASC") or die ("Ha fallado la conexión");
					while ( $registro = $consulta -> fetch_assoc()) {
						echo'<option>'.$registro['nombre'].'</option>';
					}
			?>
			</select>			
			<input type="submit" value="Borrar!!" />
		</form>
	</body>
	<br>
	<a href="consulta2.php">Regresar</a><br>
</html>