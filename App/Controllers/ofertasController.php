<?php
session_start();
require_once __DIR__ . '/../DAO/usuario/Impl/ofertaDaoImpl.php';
require_once __DIR__ . '/../Models/empresa_model.php';

class OfertasController
{
    function index()
    {

        include VIEWS_PATH . 'empresas/index.php';
        include VIEWS_PATH . 'Layout/footer.php';

    }

    public function getData()
    {
        $ofertaDao = new ofertaDaoImpl();
        $oferta = $ofertaDao->getdata();
        if ($oferta) {
            echo json_encode(['success' => true, 'oferta' => $oferta]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la obtención de datos']);
        }
    }

    public function getDatabycategory()
    {
        // Obtener el ID de la categoría del cuerpo de la solicitud POST
        $requestData = json_decode(file_get_contents('php://input'), true);
        $idCategoria = $requestData['categoriaId'];

        // Luego puedes usar $idCategoria en tu lógica para obtener los cursos relacionados con esa categoría
        $cursosDao = new cursosDaoImpl();
        $cursos = $cursosDao->getdatabycategory($idCategoria);

        if ($cursos) {
            echo json_encode(['success' => true, 'Cursos' => $cursos]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la obtención de datos']);
        }
    }

}

