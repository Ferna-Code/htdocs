<?php
require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../Models/usuarioModel.php';
require_once __DIR__ . '/../Models/access_model.php';
require_once 'C:\Xampp1\htdocs\App\DAO\usuario\Impl\usuarioDaoImpl.php';


class usuariosController {
    private $db;
    private $usuariomodel;


    public function __construct() {
        $this->db = new Database();
        $this->usuariomodel = new usuariomodel($this->db);
    }


    
    public function mostrarUsuarios() {
    $usuarios = $this->usuariomodel->verUsuarios();
    $usuariosArray = json_decode(json_encode($usuarios), true);
    return $usuariosArray;
    }

    public function buscarUsuario($rut) {
        $datosusuarios = $this->usuariomodel->verUsuariosRut($rut);
        if (!empty($datosusuarios)) {
            $datosusuariosArray = json_decode(json_encode($datosusuarios), true);
            return $datosusuariosArray;
        } else {
            return false; 
        }
    }
    
    public function likePublicacion() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents('php://input'), true);
    
            if (isset($data['publicacionId'])) {
                $publicacionId = intval($data['publicacionId']);
                $publicaciones = new usuarioDaoImpl();
                $success = $publicaciones->actualizarLikes($publicacionId);
    
                if ($success !== false && $success > 0) {
                    // Si se actualizó correctamente, enviar una respuesta JSON de éxito
                    $response = ['success' => true];
                } else {
                    // Si hubo un error al actualizar, enviar una respuesta JSON de error
                    $response = ['success' => false, 'message' => 'Error al actualizar los likes de la publicación.'];
                }
            } else {
                // Si no se recibió el ID de la publicación, enviar una respuesta JSON de error
                $response = ['success' => false, 'message' => 'ID de publicación no recibido.'];
            }
        } else {
            // Si la solicitud no es POST, enviar una respuesta JSON de error
            $response = ['success' => false, 'message' => 'Solicitud no válida.'];
        }
    
        // Enviar la respuesta JSON al cliente
        header('Content-Type: application/json');
        echo json_encode($response);
    }
    
    public function reportarPublicacion() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents('php://input'), true);
            if (isset($data['publicacionId'])) {
                $publicacionId = intval($data['publicacionId']);
                $publicaciones = new usuarioDaoImpl();
                $success = $publicaciones->actualizarReportes($publicacionId);
                $response = ['success' => true];
            } else {
                $response = ['success' => false, 'message' => 'ID de publicación no recibido.'];
            }
        } else {
            $response = ['success' => false, 'message' => 'Solicitud no válida.'];
        }
    
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function eliminarPublicacion() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents('php://input'), true);
            
            if (isset($data['publicacionId'])) {
                $publicacionId = intval($data['publicacionId']);
                $publicaciones = new usuarioDaoImpl();
                $success = $publicaciones->deletedAtPublicaciones($publicacionId);
    
                if ($success) {
                    // Si se eliminó correctamente, enviar una respuesta JSON de éxito
                    $response = ['success' => true];
                } else {
                    // Si hubo un error al eliminar, enviar una respuesta JSON de error
                    $response = ['success' => false, 'message' => 'Error al eliminar la publicación.'];
                }
            } else {
                // Si no se recibió el ID de la publicación, enviar una respuesta JSON de error
                $response = ['success' => false, 'message' => 'ID de publicación no recibido.'];
            }
        } else {
            // Si la solicitud no es POST, enviar una respuesta JSON de error
            $response = ['success' => false, 'message' => 'Solicitud no válida.'];
        }
    
        // Enviar la respuesta JSON al cliente
        header('Content-Type: application/json');
        echo json_encode($response);
    }
    
}



