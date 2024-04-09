<?php

class AlumnoController{
    function index(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Alumno/index.php';
        include VIEWS_PATH . 'Layout/footer.php';
    }

}