<?php

class AdministradorController{
    public function index(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/index.php';  //carpeta/vista
        include VIEWS_PATH . 'Layout/footer.php';
    }
}

