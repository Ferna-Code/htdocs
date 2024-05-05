<?php
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}
ob_start();
function verificarAcceso($perfilesPermitidos) {
    if (!isset($_SESSION['idperfil']) || $_SESSION['idperfil'] !== $perfilesPermitidos) {
        error_log("Acceso no permitido para el perfil: " . $_SESSION['idperfil']);
       // echo '<script>alert("No tiene permisos para acceder a esta ruta");</script>';
        header('Location: http://localhost:8080/');
        exit();
    }
}