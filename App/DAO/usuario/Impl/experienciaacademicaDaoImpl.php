<?php
require_once __DIR__ . '/../experienciaacademicaDAO.php';
require_once __DIR__ . '/../../../Models/experienciaacademica_model.php';
require_once __DIR__ . '/../../../Models/conexion.php';
require_once __DIR__ . '/../../../Models/usuario_model.php';

class experienciaacademicaDaoImpl implements experienciaacademicaDao
{

    private $db;

    public function __construct()
    {
        $this->db = new conexion();
    }

    public function getData($rutusuario)
    {
        
        $sql = "SELECT ID, rutusuario, fechafinalizacion, titulobtenido, cursaactualmente, fechaCreacion, activo, fechaEliminacion FROM experienciaacademica WHERE rutusuario = ? AND fechaEliminacion IS NULL";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $rutusuario);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $exacademica = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $exacademica[] = $row;
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $exacademica;
    }

    public function insertarExperienciaAcademica($rutusuario, $experiencia)
    {
        $sql = "INSERT INTO experienciaacademica (rutusuario, fechafinalizacion, titulobtenido, cursaactualmente, fechaCreacion) VALUES (?, ?, ?, ?, NOW())"; // Ajusta la consulta SQL
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        $fechafinalizacion = date('Y-m-d', strtotime($experiencia['fechafinalizacion'])); // línea 74
        mysqli_stmt_bind_param(
            $stmt,
            "ssss",
            $rutusuario,
            $fechafinalizacion,
            $experiencia['titulobtenido'],
            $experiencia['cursaactualmente']
        );
        $result = mysqli_stmt_execute($stmt);
        if (!$result) {
            // Manejar el error
            echo "Error al insertar experiencia académica: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return $result;
    }

    public function obtenerExperienciaAcademicaPorID($id)
    {
        $sql = "SELECT * FROM experienciaacademica WHERE ID = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $experiencia = mysqli_fetch_assoc($result);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return $experiencia;
    }
    
    public function actualizarExperienciaAcademica($experiencia)
    {
        $sql = "UPDATE experienciaacademica SET fechafinalizacion = ?, titulobtenido = ?, cursaactualmente = ? WHERE ID = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        $fechafinalizacion = date('Y-m-d', strtotime($experiencia['fechafinalizacion'])); // línea 74
        mysqli_stmt_bind_param(
            $stmt,
            "sssi",
            $fechafinalizacion,
            $experiencia['titulobtenido'],
            $experiencia['cursaactualmente'],
            $experiencia['ID']
        );
        $result = mysqli_stmt_execute($stmt);
        if (!$result) {
            // Manejar el error
            echo "Error al actualizar experiencia académica: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return $result;
    }
    
    


    public function updateDelete(experienciaacademica_model $experiencia)
    {
        $sql = "UPDATE experienciaacademica SET fechaEliminacion = NOW() WHERE ID = ? and rutUsuario = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);

        // Asignar valores a variables antes de pasarlas por referencia
        $rutusuario = $experiencia->getRutusuario();
        $ID = $experiencia->getID();

        mysqli_stmt_bind_param($stmt, "is", $ID, $rutusuario);
        $result = mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $result;
    }

    public function delete(experienciaacademica_model $experiencia)
    {
        $sql = "DELETE FROM experienciaacademica WHERE ID = ? and rutusuario = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);

        // Asignar valores a variables antes de pasarlas por referencia
        $rutusuario = $experiencia->getRutusuario();
        $ID = $experiencia->getID();

        mysqli_stmt_bind_param($stmt, "is", $ID, $rutusuario);
        $result = mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $result;
    }


}


?>