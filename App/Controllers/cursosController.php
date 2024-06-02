<?php
require_once __DIR__ . '/../DAO/cursos/Impl/cursosDaoImpl.php';
require_once __DIR__ . '/../Models/cursos_model.php';
class cursoscontroller{
    function index(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'cursos/index.php';
        include VIEWS_PATH . 'Layout/footer.php';

    }

    function complementos(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Layout/footer.php';

    }

    public function getData(){
        $cursosDao = new cursosDaoImpl();
        $cursos = $cursosDao->getdata();
        if ($cursos) {
            echo json_encode(['success' => true, 'Cursos' => $cursos]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la obtención de datos']);
        }
    }
}