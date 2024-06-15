<?php

// ISe incluye el archivo de configuración
$config = include_once 'config.php';

// CONEXIÓN A LA BASE DE DATOS
function Conectarse($config){
    $link = mysqli_connect($config['host'], $config['user'], $config['pass']);

    if (!$link) {
        error_log("Error de conexión: " . mysqli_connect_error());
        echo "No se pudo conectar a la base de datos. Contacte al administrador.";
        exit();
    }

    if (!mysqli_select_db($link, $config['dbname'])) {
        error_log("Error seleccionando base de datos: " . mysqli_error($link));
        echo "No se pudo seleccionar la base de datos. Contacte al administrador.";
        exit();
    }

    return $link;
}

$link = Conectarse($config);
?>
