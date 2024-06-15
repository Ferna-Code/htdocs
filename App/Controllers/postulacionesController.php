<?php
//require_once __DIR__ . '/../DAO/categorias/Impl/categoriasDaoImpl.php';
require_once 'C:\xampp\htdocs\App\DAO\postulaciones\Impl\postulaciondesDaoImpl.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class postulacionescontroller{
    function index(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'alumnos/index.php';
        include VIEWS_PATH . 'Layout/footer.php';

    }

    function complementos(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Layout/footer.php';

    }

    public function getDataPostulaciones(){
        $postulacionesDao = new postulacionesDaoImpl();
        $postulaciones = $postulacionesDao->getAlldata();
        if ($postulaciones) {
            echo json_encode(['postulaciones' => $postulaciones]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la obtención de datos']);
        }
    }

    public function getDataById($id){
        $postulacionesDao = new postulacionesDaoImpl();
        $postulaciones = $postulacionesDao->getdata($id);
        if ($postulaciones) {
            echo json_encode(['postulaciones' => $postulaciones]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la obtención de datos']);
        }
    }

    public function insertData()
    {
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!isset($input['idOferta'])) {
            echo json_encode(['success' => false, 'message' => 'ID de oferta no proporcionado']);
            return;
        }

        $idOferta = $input['idOferta'];
        $rutUsuario = $_SESSION['rut']; 
        
        $postulacionDao = new postulacionesDaoImpl();
        $result = $postulacionDao->insertData($rutUsuario, $idOferta);
        
        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Postulación enviada con éxito']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al enviar la postulación']);
        }
    }


}