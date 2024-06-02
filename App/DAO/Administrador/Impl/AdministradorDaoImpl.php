<?php
require_once __DIR__ . '/../AdministradorDao.php';
require_once __DIR__ . '/../../../Models/adminPublicaciones_model.php';
require_once __DIR__ . '/../../../Models/adminCarreras_model.php';
require_once __DIR__ . '/../../../Models/adminCategorias_model.php';
require_once __DIR__ . '/../../../Models/adminCursos_model.php';
require_once __DIR__ . '/../../../Models/adminDiccionario_model.php';
require_once __DIR__ . '/../../../Models/adminPerfiles_model.php';
require_once __DIR__ . '/../../../Models/adminReportes_model.php';
require_once __DIR__ . '/../../../Models/adminUsuarios_model.php';
require_once __DIR__ . '/../../../Models/adminArchivos_model.php';
require_once __DIR__ . '/../../../Models/adminComentarios_model.php';
require_once __DIR__ . '/../../../Models/adminOfertas_model.php';
require_once __DIR__ . '/../../../Models/conexion.php';

class AdministradorDaoImpl implements AdministradorDao
{
    private $db;

    public function __construct()
    {
        $this->db = new conexion();
    }

    //FUNCIONES GET/MOSTRAR EN TABLAS//

    public function getCarreras()
    {
        $consulta = "SELECT * FROM carreras ORDER BY id DESC";
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

    public function getCategorias()
    {
        $consulta = "SELECT * FROM categorias ORDER BY id DESC";
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

    public function getCursos()
    {
        $consulta = "SELECT * FROM cursos ORDER BY id DESC";
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

    public function getDiccionario()
    {
        $consulta = "SELECT * FROM diccionario ORDER BY id DESC";
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

    public function getPerfiles()
    {
        $consulta = "SELECT * FROM perfiles ORDER BY id DESC";
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

    public function getReportes()
    {
        $consulta = "SELECT * FROM reportes ORDER BY id DESC";
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

    public function getUsuarios()
    {
        $consulta = "SELECT * FROM usuarios";
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

    public function getArchivos()
    {
        $consulta = "SELECT * FROM cvarchivos ORDER BY id DESC";
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

    public function getComentarios()
    {
        $consulta = "SELECT * FROM comentarios ORDER BY id DESC";
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

    public function getOfertas()
    {
        $consulta = "SELECT * FROM ofertas ORDER BY id DESC";
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



    //FUNCIONES DELETE EN TABLAS//


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

    public function deleteCarreras($selectedIds)
    {
        //implode(',', ...) une los elementos del array en una cadena, separándolos por comas. Por ejemplo
        //array_fill(0, count($selectedIds), '?') crea un array con count($selectedIds) elementos, todos con el valor '?'
        $inQuery = implode(',', array_fill(0, count($selectedIds), '?'));
        $consulta = "DELETE FROM carreras WHERE id IN ($inQuery)";
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
