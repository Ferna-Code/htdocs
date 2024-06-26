<?php
require_once 'C:\xampp\htdocs\App\DAO\categorias\categoriasDAO';
require_once __DIR__ . '/../../../Models/categorias_model.php';
require_once __DIR__ . '/../../../Models/conexion.php';

class categoriasDaoImpl implements categoriasDAO
{

    private $db;

    public function __construct()
    {
        $this->db = new conexion();
    }

    public function getdata(){ //todos los cursos
        $query = "SELECT id	,nombre	,fechaCreacion	,activo	,fechaEliminacion FROM categorias";
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


   
}


