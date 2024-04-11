<?php

class cursoscontroller{
    function index(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'cursos/index.php';
        include VIEWS_PATH . 'Layout/footer.php';

    }

}