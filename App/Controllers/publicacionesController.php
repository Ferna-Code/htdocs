<?php
session_start();
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

        if ($this->verificarLimitePublicaciones($rutUsuario)) {
            echo "<script>alert('Has alcanzado el límite diario de publicaciones.')</script>";
            exit();
        } else {
            $resultado = $this->publicaciones_model->guardarPublicacion($rutUsuario, $comentario);
            if ($resultado) {
                echo "<script>alert('Publicación realizada exitosamente.')</script>";
            } else {
                echo "<script>alert('Error al guardar la publicación.')</script>";
            }
            exit();
        }
    }
    
    private function verificarLimitePublicaciones($rutUsuario) {
        $numPublicaciones = $this->publicaciones_model->contarPublicacionesHoy($rutUsuario);
        return $numPublicaciones >= 3;
    }
}

?>
