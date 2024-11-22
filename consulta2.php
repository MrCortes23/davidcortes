<html>
	<html>
	
	<head>
		<title>Consulta 2</title>
		<meta charset="UTF-8" />
		<link rel ="stylesheet" href="tabla.css">

	</head>
	<body style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
	<?php
		include 'conexion2.php'; 
		$consulta = $conexion2 -> query("SELECT nombre,Edad,Fecha,VIP,Provincia FROM compania") or die ("Ha fallado la conexión");
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

<div class="container">
    <br>
    <button><a href="welcome.php">Regresar</a><br></button>

	<h1> CONSULTAR </h1>
	<button><a href="consulta3.php">Edad mayor a 17</a><br></button>
	<button><a href="consulta4.php">Personas VIP</a><br></button>
	<button><a href="consulta5.php">Provincia MADRID</a><br></button>
	<button><a href="busqueda.php">Consultar un registro</a><br></button>

	<h1> ACTUALIZAR </h1>
	<button><a href="actualizar4.php"> Actualizar nombre </a><br></button>
	
	
	<h1> ELIMINAR </h1>

	<button><a href="eliminar2.php">Eliminar un nombre</a><br></button>

	</div>
		
	</body>
	</html>