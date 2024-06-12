<?php
//require_once __DIR__ . '/../DAO/categorias/Impl/categoriasDaoImpl.php';
require_once 'C:\Xampp1\htdocs\App\DAO\categorias\impl\categoriasDaoImpl';
require_once __DIR__ . '/../Models/categorias_model.php';
class categoriascontroller{
    function index(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'alumnos/index.php';
        include VIEWS_PATH . 'Layout/footer.php';

    }

    function complementos(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Layout/footer.php';

    }

    public function getData(){
        $categoriasDao = new categoriasDaoImpl();
        $categorias = $categoriasDao->getdata();
        if ($categorias) {
            echo json_encode(['categorias' => $categorias]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la obtención de datos']);
        }
    }
}