<?php
require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../Models/publicaciones_model.php';
require_once __DIR__ . '/../Models/access_model.php';


class PublicacionesController {
    private $db;
    private $publicaciones_model;


    public function __construct() {
        $this->db = new Database();
        $this->publicaciones_model = new PublicacionesModel($this->db);
    }

    public function procesarPublicacion($comentario) {
        $rutUsuario = $_SESSION['rut']; // Obtenemos el rut de sesión
         $comentario = htmlspecialchars($comentario);

        if ($this->verificarLimitePublicaciones($rutUsuario)) {
            $mensaje = "Has alcanzado el límite diario de publicaciones..";
            $_SESSION['publicacionNoCreada'] = "limite diario";
            echo "<script>console.log('Valor de publicacionNoCreada:', '" . $_SESSION['publicacionNoCreada'] . " Controller')</script>";

        } else {
            $resultado = $this->publicaciones_model->guardarPublicacion($rutUsuario, $comentario);
            if ($resultado) {
                $_SESSION['publicacionCreada'] = "Publicación realizada exitosamente";
               
            } else {
                $_SESSION['publicacionNoCreada'] = "limite diario";
            }

        }
    }
    
    private function verificarLimitePublicaciones($rutUsuario) {
        $numPublicaciones = $this->publicaciones_model->contarPublicacionesHoy($rutUsuario);
        return $numPublicaciones >= 3;
    }


    
    public function mostrarPublicaciones() {
    $publicaciones = $this->publicaciones_model->verPublicaciones();
    $publicacionesArray = json_decode(json_encode($publicaciones), true);
    return $publicacionesArray;
    }

    public function mostrarPublicacionesUsuario($rutUsuario) {
        
        $publicacionesUsuario = $this->publicaciones_model->verPublicacionesUsuario($rutUsuario);
        $publicacionesUsuarioArray = json_decode(json_encode($publicacionesUsuario), true);
        return $publicacionesUsuarioArray;
        }


}

