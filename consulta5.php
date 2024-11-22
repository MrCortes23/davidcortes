<html>
	<html>
	<head>
		<title>Consulta 5</title>
		<link rel ="stylesheet" href="tabla2.css">
		<meta charset="UTF-8" />
		<h1>Personas de Madrid</h1>
	</head>
	<body style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
	<?php
		include 'conexion2.php'; 
		$consulta = $conexion2 -> query("SELECT nombre,Edad,Fecha,VIP,Provincia FROM compania WHERE Provincia = 'Madrid'") or die ("Ha fallado la conexión");
			while ( $registro = $consulta -> fetch_assoc() ) {
				echo '<table>'.
				"<th>nombre</th>
				 <th>Edad</th>
				 <th>Fecha</th>
				 <th>VIP</th>
				 <th>Provincia</th>".

				"<tr>".
				"<td>".$registro['nombre']."</td>".
				"<td>".$registro['Edad']."</td>".
				"<td>".$registro['Fecha']."</td>".
				"<td>".$registro['VIP']."</td>".
				"<td>".$registro['Provincia']."</td>".
			    "</tr>".
			    "</table>";
               }
			    $conexion2=null;
	?>

	<br>
	<div class="container">
	<button><a href="consulta2.php">Regresar</a><br></button>
	</div>
	</body>
	</html>