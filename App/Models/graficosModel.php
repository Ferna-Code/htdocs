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
        $sql = "SELECT COUNT(*) as total FROM publicaciones";
        $result = $this->db->query($sql);
        $row = $result->fetch_assoc();
        return $row['total'];
    }

    public function cantidadPublicacionesPorFecha() {
        // Asumiendo que tienes una conexión a la base de datos en $this->conexion
        $sql = "SELECT fechaCreacion, COUNT(*) as cantidad FROM publicaciones GROUP BY fechaCreacion";
        $consulta = mysqli_query($this->db->getConnection(), $sql);
        $resultados = [];
        while ($fila = mysqli_fetch_assoc($consulta)) {
            $resultados[] = $fila;
        }
        return $resultados;
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
    public function cantidadOfertas()
    {
        $sql = "SELECT COUNT(*) as total FROM ofertas";
        $result = $this->db->query($sql);
        $row = $result->fetch_assoc();
        return $row['total'];
    }
    public function cantidadCursos()
    {
        $sql = "SELECT COUNT(*) as total FROM cursos";
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

    public function getTopPublicaciones($limit = 3) {
        $consulta = "SELECT rutusuario, publicacion, nreportes, nlikes 
                     FROM publicaciones 
                     WHERE nlikes >= 3
                     ORDER BY id DESC 
                     LIMIT ?;";
        $stmt = mysqli_prepare($this->db->getConnection(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la búsqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    
        if (mysqli_num_rows($result) === 0) {
            return array("success" => false, "message" => "No se encontraron datos");
        }
        
        $publicaciones = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $publicaciones[] = $row;
        }
        
        mysqli_stmt_close($stmt);
        return $publicaciones;
    }

    public function getTopOfertas($limit = 3) {
        $consulta = "SELECT tipoOferta, nombreEmpresa, correocontacto, rangosalarial 
                     FROM ofertas 
                     ORDER BY id DESC 
                     LIMIT ?;";
        $stmt = mysqli_prepare($this->db->getConnection(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la búsqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    
        if (mysqli_num_rows($result) === 0) {
            return array("success" => false, "message" => "No se encontraron datos");
        }
        
        $publicaciones = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $publicaciones[] = $row;
        }
        
        mysqli_stmt_close($stmt);
        return $publicaciones;
    }
    
    
}

