<?php
require_once __DIR__ . '/../supervidorDao.php';
require_once __DIR__ . '/../../../Models/supervisorModel.php';
require_once __DIR__ . '/../../../Models/conexion.php';

class SupervisorDaoImpl implements SupervidorDao{

    private $db;

    public function __construct(){
        $this->db = new conexion();
    }

    public function insertData(SupervisorModel $admin) {
        $validateQuery = "INSERT INTO categorias (nombre, fechaCreacion, activo) VALUES (?, NOW(), 1)";

        $stmt = mysqli_prepare($this->db->conec(), $validateQuery);

        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta: " . mysqli_error($this->db->conec()));
        }

        $nuevaCategoria = $admin->getNuevaCategoria();

        mysqli_stmt_bind_param($stmt, "s", $nuevaCategoria);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            return array("success" => true, "message" => "Datos agregados correctamente");
        } else {
            return array("success" => false, "message" => "Error al agregar datos: " . mysqli_stmt_error($stmt));
        }
    }
}

