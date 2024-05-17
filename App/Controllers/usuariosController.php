<?php
require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../Models/usuarioModel.php';
require_once __DIR__ . '/../Models/access_model.php';


class usuariosController {
    private $db;
    private $usuariomodel;


    public function __construct() {
        $this->db = new Database();
        $this->usuariomodel = new usuariomodel($this->db);
    }


    
    public function mostrarUsuarios() {
    $usuarios = $this->usuariomodel->verUsuarios();
    $usuariosArray = json_decode(json_encode($usuarios), true);
    return $usuariosArray;
    }

    public function buscarUsuario($rut) {
        $datosusuarios = $this->usuariomodel->verUsuariosRut($rut);
        if (!empty($datosusuarios)) {
            $datosusuariosArray = json_decode(json_encode($datosusuarios), true);
            return $datosusuariosArray;
        } else {
            return false; 
        }
    }
    


}

