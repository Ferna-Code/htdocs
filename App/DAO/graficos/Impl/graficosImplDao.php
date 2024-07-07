<?php

require_once __DIR__ . '/../graficosDao.php';
require_once __DIR__ . '/../../../Models/conexion.php';

class GraficosImplDao implements GraficosDao{

    
    private $db;

    public function __construct(){
        $this->db = new conexion();
    }
    
    public function getTopPublicaciones($limit = 3) {
        $consulta = "SELECT rutusuario, publicacion, nreportes, nlikes 
                     FROM publicaciones 
                     WHERE nlikes >= 3
                     ORDER BY id DESC 
                     LIMIT ?;";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
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