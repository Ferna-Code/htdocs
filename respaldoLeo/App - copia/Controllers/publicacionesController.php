<?php

require_once 'App/Database.php';
require_once 'App/Models/publicaciones_model.php';
require_once 'App/Models/access_model.php';

class publicacionesController
{
    private $db;
    private $publicaciones_Model;

    public function __construct()
    {
        $this->db = new Database();
        $this->publicaciones_model = new publicaciones_model($this->db->getConnection());
    }

    public function publicar()
    {
        $usuario_Publicacion = $_POST['Publicacion'];
        $rutUsuario = $rut;

        // Verificar el conteo de publicaciones del usuario
        $conteo_publicaciones = $this->publicaciones_model->conteoPublicaciones($rutUsuario);

        if ($conteo_publicaciones >= 3) {
            echo "¡Ya has alcanzado el límite diario de publicaciones!";
            return;
        }

        // Si el usuario aún puede publicar, incrementar el conteo y realizar la publicación
        $this->publicaciones_model->InsertaPublicacion($rutUsuario,$usuario_Publicacion,$fecha_actual);
        echo "Publicación realizada exitosamente!";
    }
}

?>