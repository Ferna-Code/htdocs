<?php
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}
ob_start();
function verificarAcceso($perfilesPermitidos) {
    if (!isset($_SESSION['idperfil']) || $_SESSION['idperfil'] !== $perfilesPermitidos) {
        error_log("Acceso no permitido para el perfil: " . $_SESSION['idperfil']);
        header('Location: http://localhost/');   
        exit();
    }
}



