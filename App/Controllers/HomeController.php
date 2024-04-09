<?php


class HomeController{

    public function index(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Home/index.php';
       
    }

    public function maqueta(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'maquetas.php';
    }

    public function nav(){
        include VIEWS_PATH . 'navegador.php';
    }

    public function tabla(){
        include VIEWS_PATH . 'Layout/tabla.php';
    }
}


