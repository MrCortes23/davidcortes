<?php
session_start();
if (!isset($_SESSION['username'])) {
header("Location: login.php");
exit();
}
echo "Bienvenido, " . $_SESSION['username'] . "!";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Bienvenido</title>
<link rel="stylesheet" href="welcome.css">
</head>
<body>
<h1>¡Hola, <?php echo $_SESSION['username']; ?>!</h1>

<body>
		<form action = "recoger2.php" method="post">
                        
			<label>Digite su Nombre y apellidos</label>
			
			<input type="text" name="nombre" size="20" placeholder="Digite nombre" />
			<label>Digite su Edad</label><input type="number" name="Edad" min="1" max="90" required placeholder="Edad" />
                        <label>Digite su Direccion</label><input type="text" name="Direccion" min="1" max="90" required placeholder="Direccion" />
			<label>Seleccione fecha de viaje </label><input type="date" name="Fecha" required/>
			<label for="VIP">Es usted un cliente vip ?</label>
			<input type="radio" name="VIP" value="si">Si
			<input type="radio" name="VIP" value="no">No
            <label><br>Seleccione Ciudad Destino</label>
			<select name="Provincia">
				<option>Madrid</option>
				<option>Sevilla</option>
				<option>Bilbao</option>
				<option>Barcelona</option>
			</select>
			<br> <br>
			<input type="submit" value="Guardar!!" />
		</form>

	</body>
    
<a href="consulta2.php">Base de datos</a><br>
<a href="login.html">Cerrar sesión</a>
</body>
</html>