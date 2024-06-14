<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../DAO/Administrador/Impl/AdministradorDaoImpl.php';
require_once __DIR__ . '/../Models/adminCategoria_model.php';
require_once __DIR__ . '/../DAO/usuario/Impl/usuarioDaoImpl.php';

class AdministradorController
{
    public function index()
    {
        require_once VIEWS_PATH . 'Layout/nav.php';
        require_once VIEWS_PATH . 'Administrador/index.php';  //carpeta/vista
        require_once VIEWS_PATH . 'Layout/footer.php';
    }


    public function getDataUsuario()
    {
        $rutsesion = $_SESSION['rut'];
        $admin = new usuarioDaoImpl();
        $data = $admin->getUsuario($rutsesion);

        if ($data) {
            echo json_encode(['success' => true, 'data' => $data]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la obtención de datos']);
        }
    }

    public function guardarDatosPersonales()
{
    $rutsesion = $_SESSION['rut'];
    $admin = new usuarioDaoImpl();

    // Obtener campos modificados del POST
    $camposModificados =$_POST;

    // Verificar si se ha subido una imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == UPLOAD_ERR_OK) {
        $imagen = $_FILES['imagen'];
        $rutaDestino = 'uploads/' . basename($imagen['name']);
        if (move_uploaded_file($imagen['tmp_name'], $rutaDestino)) {
            $camposModificados['imagen'] = $rutaDestino;
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al subir la imagen']);
            return;
        }
    }

    // Actualizar usuario en la base de datos
    $resultado = $admin->actualizarUsuario($rutsesion, $camposModificados);

    if ($resultado) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al actualizar los datos del usuario']);
    }
}


    //------------ CARRERA -----------//

    public function getCarrera()
    {
        $admin = new AdministradorDaoImpl();
        $limit = 10;
        $data = $admin->getCarreras($limit);

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }


    public function updateCarrera() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents('php://input'), true);
            if (isset($data['id']) && isset($data['nuevoNombre']) && isset($data['idCategoriaSeleccionada'])) {
                $id = intval($data['id']);
                $nuevoNombre = $data['nuevoNombre']; 
                $idCategoriaSeleccionada = intval($data['idCategoriaSeleccionada']); 
                $admin = new AdministradorDaoImpl();
                $result = $admin->updateCarrera($id, $nuevoNombre, $idCategoriaSeleccionada);
                echo json_encode($result);
            } else {
                echo json_encode(array("success" => false, "message" => "Datos faltantes"));
            }
        } else {
            echo json_encode(array("success" => false, "message" => "Método no permitido"));
        }
    }
    


    //------------ CATEGORIA -----------//
    public function getCategoria()
    {
        $admin = new AdministradorDaoImpl();
        $limit = 10;
        $data = $admin->getCategorias($limit);

        if(isset($data['success']) && !$data['success']){
            echo json_encode($data); // Retornar mensaje de error
        } else {
            echo json_encode($data); // Retornar datos
        }
    }

    public function getCategoriaByID()
    {
        $admin = new AdministradorDaoImpl();
        $limit = 10;
        $data = $admin->getCategorias($limit);

        if(isset($data['success']) && !$data['success']){
            echo json_encode($data); // Retornar mensaje de error
        } else {
            echo json_encode($data); // Retornar datos
        }
    }

    public function updateCategoria() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents('php://input'), true);
            if (isset($data['id']) && isset($data['nuevoNombre'])) {
                $id = $data['id'];
                $nombre = $data['nuevoNombre'];
                $admin = new AdministradorDaoImpl();
                $result = $admin->updateCategoria($id, $nombre);
                echo json_encode($result);
            } else {
                echo json_encode(array("success" => false, "message" => "Datos faltantes"));
            }
        } else {
            echo json_encode(array("success" => false, "message" => "Método no permitido"));
        }
    }

    public function updateDiccionario() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents('php://input'), true);
            if (isset($data['id']) && isset($data['nuevaPalabra'])) {
                $id = $data['id'];
                $palabra = $data['nuevaPalabra'];
                $admin = new AdministradorDaoImpl();
                $result = $admin->updateDiccionario($id, $palabra);
                echo json_encode($result);
            } else {
                echo json_encode(array("success" => false, "message" => "Datos faltantes"));
            }
        } else {
            echo json_encode(array("success" => false, "message" => "Método no permitido"));
        }
    }
    


    //------------ CURSO -----------//
    public function getCurso()
    {
        $admin = new AdministradorDaoImpl();
        $limit = 10;
        $data = $admin->getCursos($limit);

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }



    //------------ DICCIONARIO -----------//
    public function getDiccionario()
    {
        $admin = new AdministradorDaoImpl();
        $limit = 10;
        $data = $admin->getDiccionario($limit);

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }


    //------------ PERFIL -----------//
    public function getPerfil()
    {
        $admin = new AdministradorDaoImpl();
        $limit = 10;
        $data = $admin->getPerfiles($limit);

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }


    //------------ PUBLICACION -----------//
    public function getPublicacion()
    {
        $admin = new AdministradorDaoImpl();
        $limit = 10;
        $data = $admin->getPublicaciones($limit);

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }


    //------------ REPORTE -----------//
    public function getReportes()
    {
        $admin = new AdministradorDaoImpl();
        $limit = 10;
        $data = $admin->getReportes($limit);

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }


    //------------ USUARIOS -----------//
    public function getUsuarios()
    {
        $admin = new AdministradorDaoImpl();
        $limit = 10;
        $data = $admin->getUsuarios($limit);
        


        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }

    public function getCarreraUser()
    {
        $rutsesion = $_SESSION['rut'];
        $admin = new usuarioDaoImpl();
        $data = $admin->obtenerCarreraUsuario($rutsesion);

        if ($data) {
            echo json_encode(['success' => true, 'data' => $data]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la obtención de datos']);
        }
    }

    public function getPerfilUser()
    {
        $rutsesion = $_SESSION['rut'];
        $admin = new usuarioDaoImpl();
        $data = $admin->obtenerPerfilUsuario($rutsesion);

        if ($data) {
            echo json_encode(['success' => true, 'data' => $data]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la obtención de datos']);
        }
    }

    //------------ CVARCHIVOS -----------//
    public function getArchivos()
    {
        $admin = new AdministradorDaoImpl();
        $limit = 10;
        $data = $admin->getArchivos($limit);

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }


    //------------ COMENTARIOS -----------//
    public function getComentarios()
    {
        $admin = new AdministradorDaoImpl();
        $limit = 10;
        $data = $admin->getComentarios($limit);

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }

    //------------ OFERTAS -----------//
    public function getOfertas()
    {
        $admin = new AdministradorDaoImpl();
        $limit = 10;
        $data = $admin->getOfertas($limit);

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }

    //------------ POSTULACIONES -----------//
    public function getPostulaciones()
    {
        $admin = new AdministradorDaoImpl();
        $limit = 10;
        $data = $admin->getPostulaciones($limit);

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }


    //------------ EXP ACADEMICA -----------//
    public function getExpAcademica()
    {
        $admin = new AdministradorDaoImpl();
        $limit = 10;
        $data = $admin->getExpAcademica($limit);

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }

    //------------ EXP LABORAL -----------//
    public function getExpLaboral()
    {
        $admin = new AdministradorDaoImpl();
        $limit = 10;
        $data = $admin->getExpLaboral($limit);

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }


    //--------------DELETES-------------//

    public function deleteCarreras()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteCarreras($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controlercarrera']);
        }
    }

    public function deleteCategorias()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteCategorias($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerCategoria']);
        }
    }

    public function deleteCursos()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteCursos($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerCursos']);
        }
    }

    public function deleteDiccionario()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteDiccionario($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerDiccionario']);
        }
    }

    public function deletePerfiles()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deletePerfiles($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerPerfiles']);
        }
    }

    public function deletePublicaciones()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deletePublicaciones($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerPublicaciones']);
        }
    }

    public function deleteReportes()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteReportes($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerReportes']);
        }
    }

    public function deleteUsuarios()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteUsuarios($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerUsuarios']);
        }
    }

    public function deleteArchivos()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteArchivos($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerArchivos']);
        }
    }

    public function deleteComentarios()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteComentarios($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerComentarios']);
        }
    }

    public function deleteOfertas()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteOfertas($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerOfertas']);
        }
    }

    public function deletePostulaciones()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deletePostulaciones($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerPostulaciones']);
        }
    }

    public function deleteExpAcademica()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteExpAcademica($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerExpAcademica']);
        }
    }

    public function deleteExpLaboral()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteExpLaboral($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerExpLaboral']);
        }
    }





    //-------------------INSERT-----------------//

    public function insertCategoria()
    { //CATEGORIA

        $json = file_get_contents('php://input'); //escucha el input dentro del PHP
        $data = json_decode($json, true);
        echo "<script>alert('controlador')</script>";
        echo "<script>console.log('controlador')</script>";
        if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
            echo json_encode(['success' => false, 'message' => 'Error: Datos no recibidos' . json_last_error_msg() . '']);
            return;
        }
        $nuevaCategoria = $data['nuevaCategoria'];

        $admin = new AdministradorDaoImpl();
        $adminModel = new AdminCategoriasModel();
        $adminModel->setNuevaCategoria($nuevaCategoria);

        $result = $admin->insertCategoria($adminModel);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Actualización exitosa']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización']);
        }
    }

    public function insertCarrera()
    { 

        $json = file_get_contents('php://input'); //escucha el input dentro del PHP
        $data = json_decode($json, true);
        echo "<script>alert('controlador')</script>";
        echo "<script>console.log('controlador')</script>";
        if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
            echo json_encode(['success' => false, 'message' => 'Error: Datos no recibidos' . json_last_error_msg() . '']);
            return;
        }
        $Carrera = $data['nuevaCarrera'];
        $categoria = $data['categoriaCarrera'];

        $admin = new AdministradorDaoImpl();
        $adminModel = new AdminCategoriasModel();
        $adminModel->setNuevaCarrera($Carrera);
        $adminModel->setCategoriaCarrera($categoria);

        $result = $admin->insertCarrera($adminModel);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Actualización exitosa']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización']);
        }
    }
    
    public function insertPalabra()
    { 

        $json = file_get_contents('php://input'); //escucha el input dentro del PHP
        $data = json_decode($json, true);
        echo "<script>alert('controlador')</script>";
        echo "<script>console.log('controlador')</script>";
        if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
            echo json_encode(['success' => false, 'message' => 'Error: Datos no recibidos' . json_last_error_msg() . '']);
            return;
        }
        $palabra = $data['palabra'];
       

        $admin = new AdministradorDaoImpl();
        $adminModel = new AdminCategoriasModel();
        $adminModel->setNuevaPalabra($palabra);
        

        $result = $admin->insertPalabra($adminModel);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Actualización exitosa']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización']);
        }
    }
}
  
