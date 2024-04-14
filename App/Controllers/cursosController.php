<?php

class cursoscontroller{
    function index(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'cursos/index.php';
        include VIEWS_PATH . 'Layout/footer.php';

    }

    function complementos(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'cursos/complementos/educacionbienestar.php';
        include VIEWS_PATH . 'Layout/footer.php';

    }
}