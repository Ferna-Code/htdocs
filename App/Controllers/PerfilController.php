<?php

class PerfilController{

    public function index(){
        
        include VIEWS_PATH . 'Perfil/index.php';
    }

    public function updateData(){
        if (isset($_POST['op']) && $_POST['op'] == "guardardatos") {
            
        }
    }
}