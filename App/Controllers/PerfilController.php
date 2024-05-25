<?php

require_once __DIR__ . '/../DAO/usuario/Impl/usuarioDaoImpl.php';
require_once __DIR__ . '/../Models/usuario_model.php';
session_start();

class PerfilController
{

    public function index() {
        include_once '/alumnos/complementos/perfilusuario.php';
    }
    
    public function guardarDatosAlumno()
    {
        $rutsesion = $_SESSION['rut'];

        // Obtener los datos del POST
        $imagen = isset($_FILES['imagen']) ? $_FILES['imagen'] : null;
        $rut = $rutsesion;
        $email = isset($_POST['email']) ? $_POST['email'] : "";
        var_dump($email);
        $fechanac = isset($_POST['fechanac']) ? $_POST['fechanac'] : "";
        var_dump($fechanac);
        $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : "";
        var_dump($telefono);
        $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : "";
        var_dump($direccion);
        $password = isset($_POST['clave']) ? $_POST['clave'] : "";
        var_dump($password);

        // Procesar la imagen
        $imagenPath = '/uploads/';
        define('UPLOADS_DIR', 'C:/Xampp1/htdocs/uploads/');
        if ($imagen) {
            $imagenPath .= basename($imagen['name']);
            move_uploaded_file($imagen['tmp_name'], UPLOADS_DIR . basename($imagen['name']));
        }

        // Guardar en la base de datos
        $admin = new usuarioDaoImpl();
        $usuarioModel = new usuario_model();

        $usuarioModel->setimagen($imagenPath);
        $usuarioModel->setrut($rut);
        $usuarioModel->setcorreo($email);
        $usuarioModel->setfechaNacimiento($fechanac);
        $usuarioModel->settelefono($telefono);
        $usuarioModel->setclave($password);

        $result = $admin->subirImagenUsuario($usuarioModel);
        $datosActualizados = $admin->actualizarDatosUsuario($usuarioModel);

        if ($result || $datosActualizados) {
            echo json_encode(['success' => true, 'message' => $result]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al guardar datos']);
        }
    }

    public function getData()
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
    

}