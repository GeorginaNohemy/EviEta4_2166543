<?php
$con=mysqli_connect("localhost", "root", "", "coleguio_2165543");//asignamos una variable el resultado de la conexion
if (!$con) //cjeca el resultado de la conexion: TRUE o FALSE
{
	die('No se establecio la conexion con el servidor:' .mysqli_erro()); //FALSE en caso de falla
}
$sql="INSERT INTO alumnos
VALUES ('$_POST[Matricula]','$_POST[Nombre]','$_POST[Apellido]','$_POST[Semestre]')";
	if (!mysqli_query($con, $sql, MYSQLI_USE_RESULT))
	{
		die('Error;' .mysqli_error($con));
	}
	echo "<center>";
	echo "1 registro agrgado<br>";
	echo "<a href='ConsultaPedidos.php'>Ver registro</a>";
	mysqli_close($con);
?>