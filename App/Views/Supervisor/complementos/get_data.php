<?php
// get_data.php

// Conectarse a la base de datos
require_once("");
$db = new conexion();
$conexion = $db->conec();

// Obtener la consulta SQL enviada desde el cliente
$sql = $_POST['sql'];

// Ejecutar la consulta
$consulta = mysqli_query($conexion, $sql);

// Crear un array para almacenar los resultados
$rows = array();
while ($row = mysqli_fetch_assoc($consulta)) {
    $rows[] = $row;
}

// Devolver los resultados en formato JSON
echo json_encode($rows);
?>
