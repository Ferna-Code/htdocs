<?php
require_once __DIR__ . '/../AdministradorDao.php';
require_once __DIR__ . '/../../../Models/adminPublicaciones_model.php';
require_once __DIR__ . '/../../../Models/conexion.php';

class AdministradorDaoImpl implements AdministradorDao
{
    private $db;

    public function __construct()
    {
        $this->db = new conexion();
    }

    public function getPublicaciones()
    {
        $consulta = "SELECT * FROM publicaciones ORDER BY id DESC";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 0) {
            return false;
        }
        mysqli_stmt_close($stmt);
        return $result;
    }
}
