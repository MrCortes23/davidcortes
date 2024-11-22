<?php
// sr. aprendiz, crear una bd y una tabla para buscar los datos que aparecen, 
//Configuración de la conexión a la base de datos
// deben cambiar estilos y maquetacion a su gusto
$servername = "localhost";
$username = "root"; // Cambiar
$password = "";     // Cambiar
$dbname = "compania";

// Crear conexión con clase mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

//  siempre Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se ha enviado el formulario de búsqueda
if (isset($_POST['buscar'])) {
    $criterio = $_POST['criterio'];
    
    // Consulta mySQL para buscar en la tabla 'clientes'
    $sql = "SELECT * FROM compania WHERE nombre LIKE '%$criterio%' OR edad LIKE '%$criterio%' OR provincia LIKE '%$criterio%'  OR direccion LIKE '%$criterio%'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        // Mostrar resultados de búsqueda
        echo "<h2>Resultados de la búsqueda:</h2>";
        echo "<table border='1'>
                <tr>
                    <th>nombre</th>
                    <th>Edad</th>
                    <th>Provincia</th>
                    <th>Direccion</th>
                </tr>";
        while($fila = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>" . $fila["nombre"] . "</td>
                    <td>" . $fila["Edad"] . "</td>
                    <td>" . $fila["Provincia"] . "</td>
                    <td>" . $fila["Direccion"] . "</td>

                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }
}

// Cerrar conexión
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Búsqueda en la base de datos</title>
    <link rel ="stylesheet" href="consulta.css">
</head>
<body>
    <h1>Búsqueda de Clientes</h1>
    <form method="POST" action="">
        <input type="text" name="criterio" placeholder="Escribe el nombre, edad, provincia o direccion">
        <button type="submit" name="buscar">Buscar</button>
    </form>
<br>
<br>
    <a href="consulta2.php">Regresar</a><br>

</body>
</html>
