<?php
require_once __DIR__ . '/../experiencialaboralDAO.php';
require_once __DIR__ . '/../../../Models/experiencialaboral_model.php';
require_once __DIR__ . '/../../../Models/conexion.php';
require_once __DIR__ . '/../../../Models/usuario_model.php';

class experiencialaboralImpl implements experiencialaboralDao
{

    private $db;

    public function __construct()
    {
        $this->db = new conexion();
    }

    public function getData($rut)
    {

        $sql = "SELECT ID,rutusuario,fechadesde,fechahasta,puesto,Descripcion,trabajaactualmente,fechaCreacion,activo,fechaEliminacion FROM experiencialaboral WHERE rutusuario = ? and fechaEliminacion is null";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $rut);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $explaboral = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $explaboral[] = $row;
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $explaboral;
    }

    // Insertar una nueva experiencia laboral en la base de datos
    public function insertarExperienciaLaboral($rutusuario, $experiencia)
    {
        $sql = "INSERT INTO experiencialaboral (rutusuario, fechadesde, fechahasta, puesto, Descripcion, trabajaactualmente, fechaCreacion, activo) 
            VALUES (?, ?, ?, ?, ?, ?, NOW(), 1)";

        $fechadesde = date('Y-m-d', strtotime($experiencia['desde'])); // linea 74
        $fechahasta = date('Y-m-d', strtotime($experiencia['hasta'])); // linea 75
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param(
            $stmt,
            "sssssi",
            $rutusuario,
            $fechadesde,
            $fechahasta,
            $experiencia['puesto'],
            $experiencia['descripcion'],
            $experiencia['trabajaactualmente']
        );
        if ($stmt->execute()) {
            return true;
        } else {
            // Manejar el error
            return false;
        }
    }

    // Actualizar una experiencia laboral existente en la base de datos
    public function actualizarExperienciaLaboral($experiencia)
    {
        $sql = "UPDATE experiencialaboral 
                SET fechadesde = ?, fechahasta = ?, puesto = ?, Descripcion = ?, trabajaactualmente = ?
                WHERE ID = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);

        // Formatear las fechas al formato adecuado ('Y-m-d')
        $fechadesde = date('Y-m-d', strtotime($experiencia['desde'])); // linea 74
        $fechahasta = date('Y-m-d', strtotime($experiencia['hasta'])); // linea 75

        mysqli_stmt_bind_param(
            $stmt,
            "sssssi",
            $fechadesde,
            $fechahasta,
            $experiencia['puesto'],
            $experiencia['descripcion'],
            $experiencia['trabajaactualmente'],
            $experiencia['ID']
        );
        if ($stmt->execute()) {
            return true;
        } else {
            // Manejar el error
            return false;
        }
    }


    // Obtener una experiencia laboral por su ID
    public function obtenerExperienciaLaboralPorID($id)
    {
        $sql = "SELECT * FROM experiencialaboral WHERE ID = ?";
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



}