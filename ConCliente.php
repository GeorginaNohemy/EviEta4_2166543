<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Consulta</title>
<style>
        /* Estilos generales */
body {
    font-family: 'Helvetica Neue', Arial, sans-serif; /* Fuente moderna y limpia */
    background-color: #95a5a6;/* Fondo claro y neutro */
    color: #333; /* Color de texto oscuro para buen contraste */
    margin: 0;
    padding: 0;
}

/* Estilo para el título */
h1 {
    text-align: center;
    color: #17202a; /* Color lavanda pastel */
    font-size: 36px;
    font-weight: 700;
    margin-top: 50px;
    margin-bottom: 20px;

}

/* Contenedor de la tabla */
table {
    width: 100%;
    max-width: 500px;
    margin: 40px auto;
    border-collapse: collapse;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Sombra sutil */
    border-radius: 8px;
    background-color: #ffffff; /* Fondo blanco para la tabla */
    overflow: hidden;
}

/* Estilo para las filas de la tabla */
tr {
    transition: background-color 0.3s ease;
}


/* Estilo para las celdas */
td {
    padding: 15px;
    text-align: center;
    font-size: 18px;
    color: #333; /* Color de texto en celdas */
    padding: 15px;
    background-color: #ffffff ; /* Fondo blanco */
    text-align: center;
    border: 1px solid #2471a3  ; /* Borde claro */
    transition: background-color 0.3s;
}
td:hover {
            background-color: #2471a3   ; /* Color gris claro al pasar el mouse */
        }

/* Estilo para los enlaces */
a {
    text-decoration: none;
    color: #fff;
    background-color: #2471a3; /* Azul pastel para los enlaces */
    padding: 12px 20px;
    border-radius: 5px;
    font-size: 18px;
    display: inline-block;
    transition: background-color 0.3s ease, transform 0.3s ease;
    text-decoration: none;
    color: #fdfefe; /* Color azul para los enlaces */
    font-weight: bold;
    font-size: 1.1em; /* Tamaño de fuente moderado */
        
}

/* Efecto hover en los enlaces */
a:hover {
    background-color: #76b3c1; /* Color más oscuro de azul pastel en hover */
    transform: translateY(-3px); /* Efecto de elevación */
    color: #c39bd3; /* Color más oscuro al pasar el mouse */
}

/* Estilo para los enlaces cuando están desactivados */
a:disabled {
    background-color: #b0b0b0;
    cursor: not-allowed;
}

/* Media query para dispositivos pequeños */
@media (max-width: 768px) {
    h1 {
        font-size: 30px;
    }

    table {
        width: 90%;
    }

    td {
        font-size: 16px;
    }

    a {
        font-size: 16px;
        padding: 10px 15px;
    }
}
</style>
</head>
<body>
<?php
    $con = mysqli_connect("localhost", "root", "", "pia_2165543") or die("Falla al conectar");
    $query = $con->query("SELECT * FROM clientes");
 
    echo "<h1>Consulta a la tabla de Clientes</h1>";
    echo "<center><table>
<tr>
<th>Id_Cliente</th> 
<th>Nombre</th> 
<th>Apellido</th>
<th>Dirreccion</th>
</tr>";
    $cont = 0;
    while ($row = mysqli_fetch_array($query)) {
        echo "<tr>";
        echo "<td>" . $row['Id_Cliente'] . "</td>"; 
        echo "<td>" . $row['Nombre'] . "</td>"; 
        echo "<td>" . $row['Apellido'] . "</td>";
        echo "<td>" . $row['Dirreccion'] . "</td>";
        echo "</tr>";
        $cont++;
    }
    echo "</table><br>";
    echo "El número de registros son: " . $cont . "<br>";
    mysqli_close($con);
    echo "<div class='footer'>Realizado por: Georgina Nohemy Cruz Bolaños<br>";
    echo "<a href='MenudeConsultas.html'>Menú Principal</a></div></center>";
    ?>
</body>
</html>