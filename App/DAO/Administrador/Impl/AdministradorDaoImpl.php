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


    public function deletePublicaciones($selectedIds)
    {
        //implode(',', ...) une los elementos del array en una cadena, separándolos por comas. Por ejemplo
        //array_fill(0, count($selectedIds), '?') crea un array con count($selectedIds) elementos, todos con el valor '?'
        $inQuery = implode(',', array_fill(0, count($selectedIds), '?'));
        $consulta = "DELETE FROM publicaciones WHERE id IN ($inQuery)";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);

        if (!$stmt) {
            return false;
        }
        //str_repeat('i', count($selectedIds)) crea una cadena de tipos, en este caso, 'i' 
        //repetido tantas veces como elementos haya en $selectedIds. 
        $types = str_repeat('i', count($selectedIds));
        mysqli_stmt_bind_param($stmt, $types, ...$selectedIds);

        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        return $success;
    }
}
