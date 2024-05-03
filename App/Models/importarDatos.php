<?php


//recuperar archivo
require './vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

if (isset($_POST['send'])) {
    if ($_FILES['excel']['size'] > 0) {
        //validamos que sea un excel
        if ($_FILES['excel']['type'] === 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
            $archivoCOntenedor = $_FILES['excel']['tmp_name'];
            importarDato($archivoCOntenedor);
        } else {
            echo "<script>alert('Error el archivo no es un Excel')</script>";
        }
    } else {
        echo "<script>alert('No se a seleccionado ningun archivo')</script>";
    }
    echo "<script>window.location.href = '/';</script>";
}

function importarDato($archivoExcel)
{
    include "conexion.php";
    //usamos la libreria phpspreadsheet para leer el archivo excel
    $documento = IOFactory::load($archivoExcel);

    //seleccionamos la hoja a leer
    $hojaExcel = $documento->getActiveSheet();
    //obtenemos la cantidad de filas de la hojaExcel
    $filasExcel = $hojaExcel->getHighestDataRow();

    for ($fila = 2; $fila <= $filasExcel; $fila++) {

        $rut = $hojaExcel->getCell('A' . $fila)->getValue();
        $nombre = $hojaExcel->getCell('B' . $fila)->getValue();
        $nacimiento = $hojaExcel->getCell('C' . $fila)->getValue();
        $idPerfil = $hojaExcel->getCell('D' . $fila)->getValue();
        $correo = $hojaExcel->getCell('E' . $fila)->getValue();
        $idCarrera = $hojaExcel->getCell('F' . $fila)->getValue();
        $semestre = $hojaExcel->getCell('G' . $fila)->getValue();
        $cargo = $hojaExcel->getCell('H' . $fila)->getValue();

        // Verificar si el rut ya existe en la base de datos
        $consulta = "SELECT COUNT(*) AS contar FROM usuarios WHERE rut = ?";
        $prepareConsulta = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($prepareConsulta, "s", $rut);
        mysqli_stmt_execute($prepareConsulta);
        mysqli_stmt_bind_result($prepareConsulta, $contar);
        mysqli_stmt_fetch($prepareConsulta);
        mysqli_stmt_close($prepareConsulta);

        if ($contar == 0) { // Si no existe, inserta los datos
            insertData($rut, $nombre, $nacimiento, $idPerfil, $correo, $idCarrera, $semestre, $cargo);
        }

        // if($rut != NULL || $nombre != NULL || $nacimiento != NULL || $idPerfil != NULL || 
        // $correo != NULL || $idCarrera != NULL || $semestre != NULL || $cargo != NULL
        // ) {
        //     insertData($rut, $nombre, $nacimiento, $idPerfil, $correo, $idCarrera, $semestre, $cargo);
        // }
    }
}


function claveOne($length = 10)
{
    return substr(str_shuffle(str_repeat($x = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ$.()&?¿!', ceil($length / strlen($x)))), 1, $length);
}


function insertData($rut_, $nombre_, $nacimiento_, $idPerfil_, $correo_, $idCarrera_, $semestre_, $cargo_){
    include 'conexion.php';

    // Preparar la clave única
    $miClaveOne = claveOne();

    // Convertir la fecha de nacimiento al formato correcto
    $fechaNacimiento = date('Y-m-d', strtotime($nacimiento_));

    // Preparar la consulta SQL para insertar los datos
    $insert = "INSERT INTO usuarios(rut, nombre, fechaNacimiento, idperfil, correo, idcarrera, avance, cargo, clave, fechaCreacion, activo)
    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), 1)";

    $prepareQuery = mysqli_prepare($conexion, $insert);

    // Enlazar parámetros y tipos de datos
    mysqli_stmt_bind_param($prepareQuery, "sssisisss", $rut_, $nombre_, $fechaNacimiento, $idPerfil_, $correo_, $idCarrera_, $semestre_, $cargo_, $miClaveOne);

    // Ejecutar la consulta
    $ejecutar = mysqli_stmt_execute($prepareQuery);
    mysqli_stmt_close($prepareQuery);

    if($ejecutar){
        echo "<script>alert('Datos agregados')</script>";
    }
    echo "<script>window.location.href = '/';</script>";
}

