<?php

$rut = $_SESSION['rut'];
class PerfilController{
    
    public function index(){
        
        include VIEWS_PATH . 'Perfil/index.php';
    }

    public function updateData(){
        if (isset($_POST['op']) && $_POST['op'] == "guardardatos") {
            
        }
    }

    public function verUsuario($rut){
        $modelusuario = new Usuario();
      $datosUsuario = $modelusuario->verUsuario($rut);
    }
}