<!-- Conexión a la base de datos,
codificación de caracteres,
seleccion de base de datos. -->
<?php 
$conexion = mysqli_connect("localhost", "root", "", "gestion_bodega") or  die("no conectado");

mysqli_set_charset($conexion, 'utf8');//espera dos parametros

//mysqli_select_db("gestion_bodega") or die("Base de Datos no encontrada </br>");
 ?>