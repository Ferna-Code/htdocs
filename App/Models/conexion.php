<?php 
$conexion = mysqli_connect("localhost", "root", "", "redleones") or  die("no conectado");

mysqli_set_charset($conexion, 'utf8');//espera dos parametros