<?php
session_start();
require_once __DIR__ . '/../DAO/supervisor/Impl/supervisorDaoImpl.php';
require_once __DIR__ . '/../Models/supervisorModel.php';

class SupervisorController{
    public function index(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Supervisor/index.php';
        include VIEWS_PATH . 'Layout/footer.php';
    }

    public function insertData(){
       
        $json = file_get_contents('php://input');//escucha el input dentro del PHP
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
    public function insertCurso(){
       
        $json = file_get_contents('php://input');//escucha el input dentro del PHP
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
        
        $admin = new SupervisorDaoImpl();
        $supervisorModel = new SupervisorModel();
        $supervisorModel->setCategoriaCurso($categoria);
        $supervisorModel->setNombreCurso($nombre);
        $supervisorModel->setDescripcionCurso($descripcion);
        $supervisorModel->setFechaInicio($fechaInicio);
        $supervisorModel->setLink($link);
        $supervisorModel->setactivo($activo);

        $result = $admin->insertCurso($supervisorModel);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Actualización exitosa']);
            
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización']);
        }

    }

    public function insertPerfil(){
       
        $json = file_get_contents('php://input');//escucha el input dentro del PHP
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

    public function insertPalabra(){
       
        $json = file_get_contents('php://input');//escucha el input dentro del PHP
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
            echo json_encode(['success' => true, 'message' => 'Actualización exitosa']);
            
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización']);
        }

    }

    public function insertUsuario(){
       
        $json = file_get_contents('php://input');//escucha el input dentro del PHP
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
}