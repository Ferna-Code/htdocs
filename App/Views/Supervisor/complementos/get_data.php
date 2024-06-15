<?php
// get_data.php

require_once("./App/Models/conexion.php");

$db = new conexion();
$conexion = $db->conec();

$sql = $_POST['sql'];

$consulta = mysqli_query($conexion, $sql);

$rows = array();
while ($row = mysqli_fetch_assoc($consulta)) {
    $rows[] = $row;
}

echo json_encode($rows);
?>
