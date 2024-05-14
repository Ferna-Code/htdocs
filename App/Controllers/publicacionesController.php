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
            //header("Location: http://localhost:8080/Alumno#?mensaje=".urlencode($mensaje)); 
            echo "<script>alert('Has alcanzado el límite diario de publicaciones.')</script>";

        } else {
            $resultado = $this->publicaciones_model->guardarPublicacion($rutUsuario, $comentario);
            if ($resultado) {
                //$mensaje = "Publicación realizada exitosamente.";
                //header("Location: muroPrueba.php?mensaje=".urlencode($mensaje)); 
                echo "<script>alert('Publicación realizada exitosamente.')</script>";
            } else {
                //$mensaje = "Error al guardar la publicación.";
                //header("Location: muroPrueba.php?mensaje=".urlencode($mensaje)); 
                echo "<script>alert('Error al guardar la publicación.')</script>";
            }

        }
    }
    
    private function verificarLimitePublicaciones($rutUsuario) {
        $numPublicaciones = $this->publicaciones_model->contarPublicacionesHoy($rutUsuario);
        return $numPublicaciones >= 3;
    }



    private function mostrarPublicaciones() {
    $DetallePubliaciones = $this->publicaciones_model->MostrarPublicaciones();
    return $DetallePubliaciones;
    }
}

