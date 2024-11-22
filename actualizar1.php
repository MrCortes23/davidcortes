<html>
	<head>
		<title>Update 1</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<?php
			include 'conexion2.php';
			$consulta = $conexion2 -> query ("UPDATE compania SET vip = 'no' WHERE edad >= 30") or die ("Ha fallado la conexión");
			$conexion = null;
			echo 'El registro se ha actualizado correctamente';
		?>
	</body>
	<br>
	<a href="consulta2.php">Regresar</a><br>
</html>