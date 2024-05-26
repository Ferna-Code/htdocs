<?php
require_once __DIR__ . '/../../Models/usuario_model.php';

interface UsuarioDao{

    function insertData(usuario_model $admin);  
    function subirImagenUsuario(usuario_model $admin);
    function getUsuario($rut);
    function actualizarDatosUsuario(usuario_model $admin);
    function actualizarUsuario($rut, $camposModificados);
}