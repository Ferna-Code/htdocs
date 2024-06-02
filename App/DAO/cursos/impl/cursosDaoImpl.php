<?php
require_once __DIR__ . '/../cursosDAO.php';
require_once __DIR__ . '/../../../Models/cursos_model.php';
require_once __DIR__ . '/../../../Models/conexion.php';

class cursosDaoImpl implements cursosDAO
{

    private $db;

    public function __construct()
    {
        $this->db = new conexion();
    }

    public function getdata(){
        $query = "SELECT id, nombre, descripcion, emitidopor, linkpostular, idcategoria, fechaCreacion, activo, fechaEliminacion FROM cursos";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        $cursos = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $cursos[] = $row;
        }
    
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    
        return $cursos;
    }

    public function getdataCategoria($idCategoria){
        $query = "SELECT id, nombre, descripcion, emitidopor, linkpostular, idcategoria, fechaCreacion, activo, fechaEliminacion FROM cursos where idcategoria = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "i", $idCategoria);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        $cursos = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $cursos[] = $row;
        }
    
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    
        return $cursos;
    }
}


