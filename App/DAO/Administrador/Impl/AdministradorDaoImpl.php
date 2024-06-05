<?php
require_once __DIR__ . '/../AdministradorDao.php';
require_once __DIR__ . '/../../../Models/adminPublicaciones_model.php';
require_once __DIR__ . '/../../../Models/adminCarreras_model.php';
require_once __DIR__ . '/../../../Models/adminCategoria_model.php';
require_once __DIR__ . '/../../../Models/adminCursos_model.php';
require_once __DIR__ . '/../../../Models/adminDiccionario_model.php';
require_once __DIR__ . '/../../../Models/adminPerfiles_model.php';
require_once __DIR__ . '/../../../Models/adminReportes_model.php';
require_once __DIR__ . '/../../../Models/adminUsuarios_model.php';
require_once __DIR__ . '/../../../Models/adminArchivos_model.php';
require_once __DIR__ . '/../../../Models/adminComentarios_model.php';
require_once __DIR__ . '/../../../Models/adminOfertas_model.php';
//require_once __DIR__ . '/../../../Models/adminPostulaciones_model.php';//
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

    public function getCategorias($limit = 10)
    {
        $consulta = "SELECT * FROM categorias WHERE fechaEliminacion IS NULL ORDER BY id DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 0) {
            return array("success" => false, "message" => "No se encontraron datos");
        }
        
        $palabras = [];
        while($row = mysqli_fetch_assoc($result)) {
            $palabras[] = $row;
        }
        
        mysqli_stmt_close($stmt);
        return $palabras;
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

  


     ////////-------- REPORTES---------////////
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

    public function getPostulaciones()
    {
        $consulta = "SELECT * FROM postulaciones ORDER BY id DESC";
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

    public function getExpAcademica()
    {
        $consulta = "SELECT * FROM expercienciaacademica ORDER BY id DESC";
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


    public function getExpLaboral()
    {
        $consulta = "SELECT * FROM experciencialaboral ORDER BY id DESC";
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

    //--------------DELETE-------------//

    public function deleteCarreras($ids)
{
    $placeholders = implode(',', array_fill(0, count($ids), '?'));
    $consulta = "DELETE FROM carreras WHERE id IN ($placeholders)";
    $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
    if (!$stmt) {
        return false;
    }

    $types = str_repeat('i', count($ids));
    mysqli_stmt_bind_param($stmt, $types, ...$ids);
    mysqli_stmt_execute($stmt);
    
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        mysqli_stmt_close($stmt);
        return true;
    } else {
        mysqli_stmt_close($stmt);
        return false;
    }
}

public function deleteCategorias($ids)
{
    $placeholders = implode(',', array_fill(0, count($ids), '?'));
    $consulta = "DELETE FROM categorias WHERE id IN ($placeholders)";
    $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
    if (!$stmt) {
        return false;
    }

    $types = str_repeat('i', count($ids));
    mysqli_stmt_bind_param($stmt, $types, ...$ids);
    mysqli_stmt_execute($stmt);
    
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        mysqli_stmt_close($stmt);
        return true;
    } else {
        mysqli_stmt_close($stmt);
        return false;
    }
}

public function deleteCursos($ids)
{
    $placeholders = implode(',', array_fill(0, count($ids), '?'));
    $consulta = "DELETE FROM cursos WHERE id IN ($placeholders)";
    $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
    if (!$stmt) {
        return false;
    }

    $types = str_repeat('i', count($ids));
    mysqli_stmt_bind_param($stmt, $types, ...$ids);
    mysqli_stmt_execute($stmt);
    
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        mysqli_stmt_close($stmt);
        return true;
    } else {
        mysqli_stmt_close($stmt);
        return false;
    }
}

public function deleteDiccionario($ids)
{
    $placeholders = implode(',', array_fill(0, count($ids), '?'));
    $consulta = "DELETE FROM diccionario WHERE id IN ($placeholders)";
    $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
    if (!$stmt) {
        return false;
    }

    $types = str_repeat('i', count($ids));
    mysqli_stmt_bind_param($stmt, $types, ...$ids);
    mysqli_stmt_execute($stmt);
    
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        mysqli_stmt_close($stmt);
        return true;
    } else {
        mysqli_stmt_close($stmt);
        return false;
    }
}

public function deletePerfiles($ids)
{
    $placeholders = implode(',', array_fill(0, count($ids), '?'));
    $consulta = "DELETE FROM perfiles WHERE id IN ($placeholders)";
    $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
    if (!$stmt) {
        return false;
    }

    $types = str_repeat('i', count($ids));
    mysqli_stmt_bind_param($stmt, $types, ...$ids);
    mysqli_stmt_execute($stmt);
    
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        mysqli_stmt_close($stmt);
        return true;
    } else {
        mysqli_stmt_close($stmt);
        return false;
    }
}

public function deletePublicaciones($ids)
{
    $placeholders = implode(',', array_fill(0, count($ids), '?'));
    $consulta = "DELETE FROM publicaciones WHERE id IN ($placeholders)";
    $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
    if (!$stmt) {
        return false;
    }

    $types = str_repeat('i', count($ids));
    mysqli_stmt_bind_param($stmt, $types, ...$ids);
    mysqli_stmt_execute($stmt);
    
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        mysqli_stmt_close($stmt);
        return true;
    } else {
        mysqli_stmt_close($stmt);
        return false;
    }
}

public function deleteReportes($ids)
{
    $placeholders = implode(',', array_fill(0, count($ids), '?'));
    $consulta = "DELETE FROM reportes WHERE id IN ($placeholders)";
    $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
    if (!$stmt) {
        return false;
    }

    $types = str_repeat('i', count($ids));
    mysqli_stmt_bind_param($stmt, $types, ...$ids);
    mysqli_stmt_execute($stmt);
    
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        mysqli_stmt_close($stmt);
        return true;
    } else {
        mysqli_stmt_close($stmt);
        return false;
    }
}

public function deleteUsuarios($ids)
{
    $placeholders = implode(',', array_fill(0, count($ids), '?'));
    $consulta = "DELETE FROM usuarios WHERE rut IN ($placeholders)";
    $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
    if (!$stmt) {
        return false;
    }

    $types = str_repeat('i', count($ids));
    mysqli_stmt_bind_param($stmt, $types, ...$ids);
    mysqli_stmt_execute($stmt);
    
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        mysqli_stmt_close($stmt);
        return true;
    } else {
        mysqli_stmt_close($stmt);
        return false;
    }
}

public function deleteArchivos($ids)
{
    $placeholders = implode(',', array_fill(0, count($ids), '?'));
    $consulta = "DELETE FROM cvarchivos WHERE rut IN ($placeholders)";
    $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
    if (!$stmt) {
        return false;
    }

    $types = str_repeat('i', count($ids));
    mysqli_stmt_bind_param($stmt, $types, ...$ids);
    mysqli_stmt_execute($stmt);
    
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        mysqli_stmt_close($stmt);
        return true;
    } else {
        mysqli_stmt_close($stmt);
        return false;
    }
}

public function deleteComentarios($ids)
{
    $placeholders = implode(',', array_fill(0, count($ids), '?'));
    $consulta = "DELETE FROM comentarios WHERE id IN ($placeholders)";
    $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
    if (!$stmt) {
        return false;
    }

    $types = str_repeat('i', count($ids));
    mysqli_stmt_bind_param($stmt, $types, ...$ids);
    mysqli_stmt_execute($stmt);
    
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        mysqli_stmt_close($stmt);
        return true;
    } else {
        mysqli_stmt_close($stmt);
        return false;
    }
}

public function deleteOfertas($ids)
{
    $placeholders = implode(',', array_fill(0, count($ids), '?'));
    $consulta = "DELETE FROM ofertas WHERE id IN ($placeholders)";
    $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
    if (!$stmt) {
        return false;
    }

    $types = str_repeat('i', count($ids));
    mysqli_stmt_bind_param($stmt, $types, ...$ids);
    mysqli_stmt_execute($stmt);
    
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        mysqli_stmt_close($stmt);
        return true;
    } else {
        mysqli_stmt_close($stmt);
        return false;
    }
}

public function deletePostulaciones($ids)
{
    $placeholders = implode(',', array_fill(0, count($ids), '?'));
    $consulta = "DELETE FROM postulaciones WHERE id IN ($placeholders)";
    $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
    if (!$stmt) {
        return false;
    }

    $types = str_repeat('i', count($ids));
    mysqli_stmt_bind_param($stmt, $types, ...$ids);
    mysqli_stmt_execute($stmt);
    
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        mysqli_stmt_close($stmt);
        return true;
    } else {
        mysqli_stmt_close($stmt);
        return false;
    }
}

public function deleteExpAcademica($ids)
{
    $placeholders = implode(',', array_fill(0, count($ids), '?'));
    $consulta = "DELETE FROM expercienciaacademica WHERE ID IN ($placeholders)";
    $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
    if (!$stmt) {
        return false;
    }

    $types = str_repeat('i', count($ids));
    mysqli_stmt_bind_param($stmt, $types, ...$ids);
    mysqli_stmt_execute($stmt);
    
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        mysqli_stmt_close($stmt);
        return true;
    } else {
        mysqli_stmt_close($stmt);
        return false;
    }
}


public function deleteExpLaboral($ids)
{
    $placeholders = implode(',', array_fill(0, count($ids), '?'));
    $consulta = "DELETE FROM experciencialaboral WHERE ID IN ($placeholders)";
    $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
    if (!$stmt) {
        return false;
    }

    $types = str_repeat('i', count($ids));
    mysqli_stmt_bind_param($stmt, $types, ...$ids);
    mysqli_stmt_execute($stmt);
    
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        mysqli_stmt_close($stmt);
        return true;
    } else {
        mysqli_stmt_close($stmt);
        return false;
    }
}




// ----------------insert -------------------//

public function insertCategoria(AdminCategoriasModel $admin)
    {
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
public function insertCarrera(AdminCategoriasModel $admin)
    {
        $validateQuery = "INSERT INTO carreras (nombre, idcategorias, fechaCreacion, activo) VALUES (?, ?, NOW(), 1)";

        $stmt = mysqli_prepare($this->db->conec(), $validateQuery);

        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta: " . mysqli_error($this->db->conec()));
        }

        $nuevaCarrera = $admin->getNuevaCarrera();
        $categoriaCarrera = $admin->getCategoriaCarrera();

        mysqli_stmt_bind_param($stmt, "si", $nuevaCarrera, $categoriaCarrera);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            return array("success" => true, "message" => "Datos agregados correctamente");
        } else {
            return array("success" => false, "message" => "Error al agregar datos: " . mysqli_stmt_error($stmt));
        }
    }

}
