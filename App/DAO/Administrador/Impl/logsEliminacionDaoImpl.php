<?php

require_once __DIR__ . '/../../../Models/logsEliminacion_model.php';
require_once __DIR__ . '/../../../Models/conexion.php';
require_once 'C:\xampp\htdocs\App\DAO\Administrador\logsEliminacionDao.php';

class logsEliminacionDaoImpl implements logsEliminacionDao
{
    private $db;

    public function __construct()
    {
        $this->db = new conexion();
    }

    public function getData() {
        $consulta = "SELECT * FROM logseliminacion ORDER BY fechaEliminacion DESC";
        $conn = $this->db->conec(); // Abre la conexión
        $stmt = mysqli_prepare($conn, $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la búsqueda");
        }
    
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    
        if (mysqli_num_rows($result) === 0) {
            mysqli_stmt_close($stmt);
            mysqli_close($conn); // Cierra la conexión aquí
            return false;
        }
    
    
        mysqli_stmt_close($stmt);
        mysqli_close($conn); // Cierra la conexión aquí
    
        return $result;
    }
    

    public function insertarLog($log, $rut,$origen) {
        $sql = 'INSERT INTO logsEliminacion (Registro, Rut, origen, FechaEliminacion) VALUES (?, ?,?, NOW())';
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        if (!$stmt) {
            return false; // Error preparando la consulta
        }
        mysqli_stmt_bind_param($stmt, "sss", $log, $rut, $origen);
        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return $success;
    }
    
}

