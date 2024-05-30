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

    public function getdata(){ //todos los cursos
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

    public function getdatabycategory($idCategoria){ //Categoria
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

    public function updateCursos(cursos_model $cursosModel)
    {
        // Obtener los datos del modelo
        $id = $cursosModel->getid();
        $nombre = $cursosModel->getNombre();
        $descripcion = $cursosModel->getDescripcion();
        $emitidoPor = $cursosModel->getEmitidoPor();
        $linkPostular = $cursosModel->getLinkPostular();
        $idCategoria = $cursosModel->getIdCategoria();
        $fechaCreacion = $cursosModel->getFechaCreacion();
        $activo = $cursosModel->getActivo();
        $fechaEliminacion = $cursosModel->getFechaEliminacion();
    
        // Preparar la consulta SQL
        $query = "UPDATE cursos SET nombre = ?, descripcion = ?, emitidoPor = ?, linkPostular = ?, idCategoria = ?, fechaCreacion = ?, activo = ?, fechaEliminacion = ? WHERE id = ?";
        $conn = $this->db->conec(); 
        $stmt = mysqli_prepare($conn, $query);
    
        // Vincular parámetros y ejecutar la consulta
        mysqli_stmt_bind_param($stmt, "sssssisi", $nombre, $descripcion, $emitidoPor, $linkPostular, $idCategoria, $fechaCreacion, $activo, $fechaEliminacion, $id);
        $success = mysqli_stmt_execute($stmt);
    
        // Cerrar la declaración preparada
        mysqli_stmt_close($stmt);
    
        // Cerrar la conexión
        mysqli_close($conn);
    
        // Devolver el resultado de la ejecución de la consulta
        return $success;
    }
    
    public function deleteCurso(cursos_model $cursosModel)
    {

        $id = $cursosModel->getId();
        // Preparar la consulta SQL
        $query = "UPDATE cursos SET fechaEliminacion WHERE id = ?";
        $conn = $this->db->conec(); 
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "s", $id);
        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $success;
    }
}


