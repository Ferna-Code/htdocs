<?php
require_once __DIR__ . '/../Database.php';

class GraficosModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    

    public function cantidadReportes()
    {
        $sql = "SELECT COUNT(*) as total FROM publicaciones WHERE nreportes > 0";
        $result = $this->db->query($sql);
        $row = $result->fetch_assoc();
        return $row['total'];
    }

    public function cantidadComentarios()
    {
        $sql = "SELECT COUNT(*) as total FROM comentarios";
        $result = $this->db->query($sql);
        $row = $result->fetch_assoc();
        return $row['total'];
    }

    public function cantidadUsuarios()
    {
        $sql = "SELECT COUNT(*) as total FROM usuarios";
        $result = $this->db->query($sql);
        $row = $result->fetch_assoc();
        return $row['total'];
    }

    public function cantidadLike()
    {
        $sql = "SELECT COUNT(*) as total FROM publicaciones WHERE nlikes > 0";
        $result = $this->db->query($sql);
        $row = $result->fetch_assoc();
        return $row['total'];
    }

    public function obtenerReportes()
    {
        $sql = "SELECT * FROM publicaciones WHERE nreportes > 0";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function obtenerComentarios()
    {
        $sql = "SELECT * FROM comentarios";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function obtenerUsuarios()
    {
        $sql = "SELECT * FROM usuarios";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function obtenerLikes()
    {
        $sql = "SELECT * FROM publicaciones WHERE nlikes > 0";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
}

