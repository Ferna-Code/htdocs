<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../DAO/supervisor/Impl/supervisorDaoImpl.php';
require_once __DIR__ . '/../Models/supervisorModel.php';
require_once __DIR__ . '/../DAO/usuario/Impl/usuarioDaoImpl.php';
class SupervisorController
{
    public function index()
    {
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Supervisor/index.php';
        include VIEWS_PATH . 'Layout/footer.php';
    }

    // obtener y modificar info del usuario

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
        $camposModificados = $_POST;

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



    public function insertData()
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

        $admin = new SupervisorDaoImpl();
        $supervisorModel = new SupervisorModel();
        $supervisorModel->setNuevaCategoria($nuevaCategoria);

        $result = $admin->insertData($supervisorModel);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Actualización exitosa']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización']);
        }
    }
    public function getCategoria()
    {
        $admin = new SupervisorDaoImpl();
        $limit = 10; // Puedes ajustar este valor según sea necesario
        $data = $admin->getCategoria($limit);

        if (isset($data['success']) && !$data['success']) {
            echo json_encode($data); // Retornar mensaje de error
        } else {
            echo json_encode($data); // Retornar datos
        }
    }
    public function insertCurso()
    {

        $json = file_get_contents('php://input'); //escucha el input dentro del PHP
        $data = json_decode($json, true);
        echo "<script>alert('controlador')</script>";
        echo "<script>console.log('controlador')</script>";
        if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
            echo json_encode(['success' => false, 'message' => 'Error: Datos no recibidos' . json_last_error_msg() . '']);
            return;
        }
        $categoria = $data['categoria'];
        $nombre = $data['nombre'];
        $descripcion = $data['descripcionCurso'];
        $fechaInicio = $data['fechaInicio'];
        $link = $data['link'];
        $activo = $data['activo'];
        $centro = $data['centro'];

        $admin = new SupervisorDaoImpl();
        $supervisorModel = new SupervisorModel();
        $supervisorModel->setCategoriaCurso($categoria);
        $supervisorModel->setNombreCurso($nombre);
        $supervisorModel->setDescripcionCurso($descripcion);
        $supervisorModel->setFechaInicio($fechaInicio);
        $supervisorModel->setLink($link);
        $supervisorModel->setactivo($activo);
        $supervisorModel->setCentro($centro);

        $result = $admin->insertCurso($supervisorModel);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Actualización exitosa']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización']);
        }
    }

    public function getCurso()
    {
        $admin = new SupervisorDaoImpl();
        $limit = 10; // Puedes ajustar este valor según sea necesario
        $data = $admin->getCurso($limit);

        if (isset($data['success']) && !$data['success']) {
            echo json_encode($data); // Retornar mensaje de error
        } else {
            echo json_encode($data); // Retornar datos
        }
    }

    public function insertPerfil()
    {

        $json = file_get_contents('php://input'); //escucha el input dentro del PHP
        $data = json_decode($json, true);

        if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
            echo json_encode(['success' => false, 'message' => 'Error: Datos no recibidos' . json_last_error_msg() . '']);
            return;
        }
        $nuevoPerfil = $data['nuevoPerfil'];

        $admin = new SupervisorDaoImpl();
        $supervisorModel = new SupervisorModel();
        $supervisorModel->setPerfil($nuevoPerfil);

        $result = $admin->insertPerfil($supervisorModel);

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

        if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
            echo json_encode(['success' => false, 'message' => 'Error: Datos no recibidos' . json_last_error_msg() . '']);
            return;
        }
        $palabra = $data['palabra'];

        $admin = new SupervisorDaoImpl();
        $supervisorModel = new SupervisorModel();
        $supervisorModel->setPalabra($palabra);

        $result = $admin->insertPalabra($supervisorModel);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Actualización exitosa', 'data' => $palabra]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización']);
        }
    }

    public function getPalabra()
    {
        $admin = new SupervisorDaoImpl();
        $limit = 10; // Puedes ajustar este valor según sea necesario
        $data = $admin->getPalabra($limit);

        if (isset($data['success']) && !$data['success']) {
            echo json_encode($data); // Retornar mensaje de error
        } else {
            echo json_encode($data); // Retornar datos
        }
    }

    public function insertUsuario()
    {

        $json = file_get_contents('php://input'); //escucha el input dentro del PHP
        $data = json_decode($json, true);
        echo "<script>alert('controlador')</script>";
        echo "<script>console.log('controlador')</script>";
        if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
            echo json_encode(['success' => false, 'message' => 'Error: Datos no recibidos' . json_last_error_msg() . '']);
            return;
        }
        $nombre = $data['nombre'];
        $rut = $data['rut'];
        $nacimiento = $data['nacimiento'];
        $direccion = $data['direccion'];
        $telefono = $data['telefono'];
        $perfil = $data['perfil'];
        $correo = $data['correo'];
        $carrera = $data['carrera'];
        $avance = $data['avance'];
        $cargo = $data['cargo'];
        $estado = $data['estado'];

        $admin = new SupervisorDaoImpl();
        $supervisorModel = new SupervisorModel();
        //set
        $supervisorModel->setNombre($nombre);
        $supervisorModel->setRut($rut);
        $supervisorModel->setNacimiento($nacimiento);
        $supervisorModel->setDireccion($direccion);
        $supervisorModel->setTelefono($telefono);
        $supervisorModel->setPerfilUsuario($perfil);
        $supervisorModel->setCorreo($correo);
        $supervisorModel->setCarrera($carrera);
        $supervisorModel->setAvance($avance);
        $supervisorModel->setCargoUsuario($cargo);
        $supervisorModel->setEstado($estado);


        $result = $admin->insertUsuario($supervisorModel);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Actualización exitosa']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización']);
        }
    }

    public function getPublicacion()
    {
        $admin = new SupervisorDaoImpl();
        $limit = 10; // Puedes ajustar este valor según sea necesario
        $data = $admin->getPublicacion($limit);

        if (isset($data['success']) && !$data['success']) {
            echo json_encode($data); // Retornar mensaje de error
        } else {
            echo json_encode($data); // Retornar datos
        }
    }
    public function getReporte()
    {
        $admin = new SupervisorDaoImpl();
        $limit = 10; // Puedes ajustar este valor según sea necesario
        $data = $admin->getReporte($limit);

        if (isset($data['success']) && !$data['success']) {
            echo json_encode($data); // Retornar mensaje de error
        } else {
            echo json_encode($data); // Retornar datos
        }
    }

    public function getOferta()
    {
        $admin = new SupervisorDaoImpl();
        $limit = 10; // Puedes ajustar este valor según sea necesario
        $data = $admin->getOferta($limit);

        if (isset($data['success']) && !$data['success']) {
            echo json_encode($data); // Retornar mensaje de error
        } else {
            echo json_encode($data); // Retornar datos
        }
    }

    public function getPerfil()
    {
        $admin = new SupervisorDaoImpl();
        $limit = 10; // Puedes ajustar este valor según sea necesario
        $data = $admin->getPerfil($limit);

        if (isset($data['success']) && !$data['success']) {
            echo json_encode($data); // Retornar mensaje de error
        } else {
            echo json_encode($data); // Retornar datos
        }
    }
    public function getUsuario()
    {
        $admin = new SupervisorDaoImpl();
        $limit = 10; // Puedes ajustar este valor según sea necesario
        $data = $admin->getUsuario($limit);

        if (isset($data['success']) && !$data['success']) {
            echo json_encode($data); // Retornar mensaje de error
        } else {
            echo json_encode($data); // Retornar datos
        }
    }

    public function getCarrera()
    {
        $admin = new SupervisorDaoImpl();
        $limit = 10; // Puedes ajustar este valor según sea necesario
        $data = $admin->getCarrera($limit);

        if (isset($data['success']) && !$data['success']) {
            echo json_encode($data); // Retornar mensaje de error
        } else {
            echo json_encode($data); // Retornar datos
        }
    }

    public function getCursoById()
    {
        $requestData = json_decode(file_get_contents('php://input'), true);
        $idCurso = $requestData['id'];
        $admin = new SupervisorDaoImpl();
        $data = $admin->getCursoById($idCurso);

        if ($data) {
            echo json_encode(['success' => true, 'curso' => $data]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la obtención de datos']);
        }
    }

    public function getUsuarioById()
    {
        $requestData = json_decode(file_get_contents('php://input'), true);
        $rutusuario = $requestData['rut'];
        $admin = new SupervisorDaoImpl();
        $data = $admin->getUsuarioByRut($rutusuario); // Cambiado para llamar el método correcto

        if ($data) {
            echo json_encode(['success' => true, 'curso' => $data]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la obtención de datos']);
        }
    }
    public function getOfertaById()
    {
        $requestData = json_decode(file_get_contents('php://input'), true);
        $idOferta = $requestData['id'];
        $admin = new SupervisorDaoImpl();
        $data = $admin->getOfertaById($idOferta); // Cambiado para llamar el método correcto

        if ($data) {
            echo json_encode(['success' => true, 'curso' => $data]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la obtención de datos']);
        }
    }
    public function getPublicacionById()
    {
        $requestData = json_decode(file_get_contents('php://input'), true);
        $idPublic = $requestData['id'];
        $admin = new SupervisorDaoImpl();
        $data = $admin->getPublicacionById($idPublic); // Cambiado para llamar el método correcto

        if ($data) {
            echo json_encode(['success' => true, 'curso' => $data]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la obtención de datos']);
        }
    }

    //-------------------DELETES-----------------
    public function deleteCategoria()
    {
        $admin = new SupervisorDaoImpl();
        $ids = json_decode(file_get_contents('php://input'), true)['ids'];
        $success = $admin->deleteCategoria($ids);

        if ($success) {
            echo json_encode(['success' => true, 'message' => 'Publicaciones eliminadas correctamente.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al eliminar las publicaciones.']);
        }
    }

    public function deleteCarrera()
    {
        $admin = new SupervisorDaoImpl();
        $ids = json_decode(file_get_contents('php://input'), true)['ids'];
        $success = $admin->deleteCarrera($ids);

        if ($success) {
            echo json_encode(['success' => true, 'message' => 'carreras eliminadas correctamente.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al eliminar las carreras.']);
        }
    }

    public function deleteCurso()
    {
        $admin = new SupervisorDaoImpl();
        $ids = json_decode(file_get_contents('php://input'), true)['ids'];
        $success = $admin->deleteCurso($ids);

        if ($success) {
            echo json_encode(['success' => true, 'message' => 'carreras eliminadas correctamente.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al eliminar las carreras.']);
        }
    }
    public function deletePublicacion()
    {
        $admin = new SupervisorDaoImpl();
        $ids = json_decode(file_get_contents('php://input'), true)['ids'];
        $success = $admin->deletePublicacion($ids);

        if ($success) {
            echo json_encode(['success' => true, 'message' => 'carreras eliminadas correctamente.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al eliminar las carreras.']);
        }
    }

    public function deleteReporte()
    {
        $admin = new SupervisorDaoImpl();
        $ids = json_decode(file_get_contents('php://input'), true)['ids'];
        $success = $admin->deleteReporte($ids);

        if ($success) {
            echo json_encode(['success' => true, 'message' => 'carreras eliminadas correctamente.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al eliminar las carreras.']);
        }
    }
    public function deleteOfertas()
    {
        $admin = new SupervisorDaoImpl();
        $ids = json_decode(file_get_contents('php://input'), true)['ids'];
        $success = $admin->deleteOfertas($ids);

        if ($success) {
            echo json_encode(['success' => true, 'message' => 'Ofertas eliminadas correctamente.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al eliminar las Ofertas.']);
        }
    }
    public function deletePerfil()
    {
        $admin = new SupervisorDaoImpl();
        $ids = json_decode(file_get_contents('php://input'), true)['ids'];
        $success = $admin->deletePerfil($ids);

        if ($success) {
            echo json_encode(['success' => true, 'message' => 'Ofertas eliminadas correctamente.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al eliminar las Ofertas.']);
        }
    }
    public function deleteUsuario()
    {
        $admin = new SupervisorDaoImpl();
        $ids = json_decode(file_get_contents('php://input'), true)['ids'];
        $success = $admin->deleteUsuario($ids);

        if ($success) {
            echo json_encode(['success' => true, 'message' => 'Ofertas eliminadas correctamente.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al eliminar las Ofertas.']);
        }
    }
    public function deletePalabra()
    {
        $admin = new SupervisorDaoImpl();
        $input = json_decode(file_get_contents('php://input'), true);

        if (!isset($input['ids']) || !is_array($input['ids'])) {
            echo json_encode(['success' => false, 'message' => 'Invalid input data.']);
            return;
        }

        $ids = $input['ids'];
        $success = $admin->deletePalabra($ids);

        if ($success) {
            echo json_encode(['success' => true, 'message' => 'Palabras eliminadas correctamente.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al eliminar las palabras.']);
        }
    }
    //----------------UPDATE-----------------

    public function updateCurso()
    {
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
            echo json_encode(['success' => false, 'message' => 'Error: Datos no recibidos']);
            return;
        }

        $idCurso = $data['idCurso'];
        $categoria = $data['categoria'];
        $nombre = $data['nombre'];
        $descripcion = $data['descripcion'];
        $fecha = $data['fecha'];
        $centro = $data['centro'];


        $admin = new SupervisorDaoImpl();
        $supervisorModel = new SupervisorModel();
        $supervisorModel->setIdCurso($idCurso);
        $supervisorModel->setCategoriaCurso($categoria);
        $supervisorModel->setNombreCurso($nombre);
        $supervisorModel->setDescripcionCurso($descripcion);
        $supervisorModel->setFechaInicio($fecha);
        $supervisorModel->setCentro($centro);


        $result = $admin->updateCurso($supervisorModel);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Actualización exitosa']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización']);
        }
    }

    public function updateUsuario()
    {
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
            echo json_encode(['success' => false, 'message' => 'Error: Datos no recibidos']);
            return;
        }

        $rut = $data['rut'];
        $idPerfil = $data['idPerfil'];
        $telefono = $data['telefono'];
        $direccion = $data['direccion'];
        $correo = $data['correo'];



        $admin = new SupervisorDaoImpl();
        $supervisorModel = new SupervisorModel();
        $supervisorModel->setRut($rut);
        $supervisorModel->setPerfilUsuario($idPerfil);
        $supervisorModel->setTelefono($telefono);
        $supervisorModel->setDireccion($direccion);
        $supervisorModel->setCorreo($correo);

        $result = $admin->updateUsuario($supervisorModel);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Actualización exitosa']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización']);
        }
    }
}
