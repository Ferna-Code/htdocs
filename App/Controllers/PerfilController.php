<?php

require_once __DIR__ . '/../DAO/usuario/Impl/usuarioDaoImpl.php';
require_once __DIR__ . '/../Models/usuario_model.php';
session_start();

class PerfilController
{

    public function index() {
        include_once '/alumnos/complementos/perfilusuario.php';
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

    public function guardarDatosAlumno() {
        $rutsesion = $_SESSION['rut'];
        $admin = new usuarioDaoImpl();

        $camposModificados = [];

        // Obtener campos modificados del POST
        foreach ($_POST as $campo => $valor) {
            $camposModificados[$campo] = $valor;
        }

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
            echo json_encode(['success' => false, 'message' => 'Error al actualizar los datos']);
        }
    }
}

