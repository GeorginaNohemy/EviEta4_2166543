<?php
$con = mysqli_connect("localhost", "root", "", "coleguio_2165543"); // se crea la conexión al servidor
 
if (!$con) {
    die("Fallo en la conexión: " . mysqli_connect_error()); // Muestra el error de conexión
}
 
$Matricula = $_POST['Matricula']; // recibe los nuevos datos del registro
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Materia = $_POST['Materia'];
 
// Usar prepared statements para evitar inyecciones SQL
$stmt = $con->prepare("UPDATE maestros SET Nombre=?, Apellido=?, Materia=? WHERE Matricula=?");
$stmt->bind_param("sssi", $Nombre, $Apellido, $Materia, $Matricula);
 
if ($stmt->execute()) {
    header("Location: ConsultaClientes.php"); // redirecciona a la primera página de Actualizar artículos
} else {
    echo "Error al actualizar: " . $stmt->error; // Muestra el error de actualización
}
 
$stmt->close(); // cierra la declaración
mysqli_close($con); // cerramos la conexión a la BD
 
echo "Realizado por: Georgina Nohemy Cruz Bolaños</center>";
echo "<a href='MenuPrincipal.html'>Menu Principal</a></center>";
?>