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
require_once 'C:\Xampp1\htdocs\App\DAO\usuario\Impl\usuarioDaoImpl.php';
require_once 'C:\Xampp1\htdocs\App\DAO\usuario\Impl\experienciaacademicaDaoImpl.php';
require_once 'C:\Xampp1\htdocs\App\DAO\Administrador\Impl\logsEliminacionDaoImpl.php';
require_once 'C:\Xampp1\htdocs\App\DAO\usuario\Impl\experiencialaboralDaoImpl.php';
require_once 'C:\Xampp1\htdocs\App\DAO\usuario\Impl\ofertaDaoImpl.php';
require_once 'C:\Xampp1\htdocs\App\DAO\postulaciones\Impl\postulaciondesDaoImpl.php';
require_once 'C:\Xampp1\htdocs\App\DAO\usuario\Impl\archivocvDaoImpl.php';
class AdministradorDaoImpl implements AdministradorDao
{
    private $db;

    public function __construct()
    {
        $this->db = new conexion();
    }

    //FUNCIONES GET/MOSTRAR EN TABLAS//

    public function getCarreras($limit = 10)
    {
        $consulta = "SELECT * FROM carreras WHERE fechaEliminacion IS NULL ORDER BY id DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit);
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
        while ($row = mysqli_fetch_assoc($result)) {
            $palabras[] = $row;
        }

        mysqli_stmt_close($stmt);
        return $palabras;
    }


    public function getCursos($limit = 10)
    {
        $consulta = "SELECT * FROM cursos where fechaEliminacion IS NULL ORDER BY id DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 0) {
            return false;
        }
        mysqli_stmt_close($stmt);
        return $result;
    }

    public function getDiccionario($limit = 10)
    {
        $consulta = "SELECT * FROM diccionario WHERE fechaEliminacion IS NULL ORDER BY id DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 0) {
            return false;
        }
        mysqli_stmt_close($stmt);
        return $result;
    }


    public function getPerfiles($limit = 10)
    {
        $consulta = "SELECT * FROM perfiles WHERE fechaEliminacion IS NULL ORDER BY id DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 0) {
            return false;
        }
        mysqli_stmt_close($stmt);
        return $result;
    }


    public function getPublicaciones($limit = 10)
    {
        $consulta = "SELECT * FROM publicaciones WHERE fechaEliminacion IS NULL ORDER BY id DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 0) {
            return false;
        }
        mysqli_stmt_close($stmt);
        return $result;
    }




    ////////-------- REPORTES---------////////
    public function getReportes($limit = 10)
    {
        $consulta = "SELECT * FROM reportes WHERE fechaEliminacion IS NULL ORDER BY id DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 0) {
            return false;
        }
        mysqli_stmt_close($stmt);
        return $result;
    }

    public function getUsuarios($limit = 20)
    {
        $consulta = "SELECT 
        u.rut,
        u.nombre,
        u.fechaNacimiento,
        u.idperfil,
        p.nombre as nombreperfil,
        u.correo,
        u.idcarrera,
        c.nombre as nombrecarrera,
        u.avance,
        u.telefono,
        u.direccion,
        u.fechaCreacion
        FROM usuarios as u
        inner join perfiles as p on p.id = u.idperfil
        inner join carreras as c on c.id = u.idcarrera
        ORDER BY u.rut DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 0) {
            return false;
        }
        mysqli_stmt_close($stmt);
        return $result;
    }
    // OTRA INFO PARA USUARIOS
    public function obtenerCarreraUsuario($rut)
    {
        $conn = $this->db->conec();
        $query1 = "SELECT idCarrera FROM usuarios WHERE rut = ?";
        $stmt1 = mysqli_prepare($conn, $query1);
        mysqli_stmt_bind_param($stmt1, "s", $rut);
        mysqli_stmt_execute($stmt1);
        mysqli_stmt_bind_result($stmt1, $idCarrera);

        // Obtener el resultado del statement 1
        mysqli_stmt_fetch($stmt1);
        mysqli_stmt_close($stmt1);

        $query2 = "SELECT nombre FROM carreras WHERE id = ?";
        $stmt2 = mysqli_prepare($conn, $query2);
        mysqli_stmt_bind_param($stmt2, "i", $idCarrera);
        mysqli_stmt_execute($stmt2);
        mysqli_stmt_bind_result($stmt2, $nombreCarrera);
        mysqli_stmt_fetch($stmt2);
        mysqli_stmt_close($stmt2);

        mysqli_close($conn);

        return $nombreCarrera;
    }




    // DATOS DE USUARIOS

    public function getArchivos($limit = 10)
    {
        $consulta = "SELECT * FROM cvarchivos WHERE fechaEliminacion IS NULL ORDER BY id DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 0) {
            return false;
        }
        mysqli_stmt_close($stmt);
        return $result;
    }

    public function getComentarios($limit = 10)
    {
        $consulta = "SELECT * FROM comentarios WHERE fechaEliminacion IS NULL ORDER BY id DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 0) {
            return false;
        }
        mysqli_stmt_close($stmt);
        return $result;
    }

    public function getOfertas($limit = 10)
    {
        $consulta = "SELECT * FROM ofertas WHERE fechaEliminacion IS NULL ORDER BY id DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 0) {
            return false;
        }
        mysqli_stmt_close($stmt);
        return $result;
    }

    public function getPostulaciones($limit = 10)
    {
        $consulta = "SELECT * FROM postulaciones WHERE fechaEliminacion IS NULL ORDER BY id DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 0) {
            return false;
        }
        mysqli_stmt_close($stmt);
        return $result;
    }

    public function getPostulacionesbyID($id)
    {
        $consulta = "SELECT * FROM postulaciones WHERE id = ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 0) {
            return false;
        }
        mysqli_stmt_close($stmt);
        return $result;
    }

    public function getExpAcademica($limit = 10)
    {
        $consulta = "SELECT * FROM experienciaacademica WHERE fechaEliminacion IS NULL ORDER BY id DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 0) {
            return false;
        }
        mysqli_stmt_close($stmt);
        return $result;
    }


    public function getExpLaboral($limit = 10)
    {
        $consulta = "SELECT * FROM experiencialaboral WHERE fechaEliminacion IS NULL ORDER BY id DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 0) {
            return false;
        }
        mysqli_stmt_close($stmt);
        return $result;
    }

    //--------------DELETE-------------//

    public function deleteCarreras($ids, $rut)
    {
        $logsdelete = new logsEliminacionDaoImpl();
        $success = true;
        $carrera = new usuarioDaoImpl();
        $origen = 'carrera';
        foreach ($ids as $id) {
            $registro = $carrera->getcarreraByID($id);
            if ($registro) {

                $logData = $this->arrayToJsonString($registro);
                $success &= $logsdelete->insertarLog($logData, $rut, $origen);
            } else {
                $success = false;
            }
        }

        if ($success) {
            $placeholders = implode(',', array_fill(0, count($ids), '?'));
            $consulta = "DELETE FROM carreras WHERE id = ($placeholders)";
            $stmt = mysqli_prepare($this->db->conec(), $consulta);

            if (!$stmt) {
                return false;
            }
            $types = str_repeat('i', count($ids));
            mysqli_stmt_bind_param($stmt, $types, ...$ids);
            mysqli_stmt_execute($stmt);
            $success &= mysqli_stmt_affected_rows($stmt) > 0;
            mysqli_stmt_close($stmt);
        } else {
            $success = false;
        }

        return $success;
    }

    public function deleteCategorias($ids, $rut)
    {
        $logsdelete = new logsEliminacionDaoImpl();
        $success = true;
        $categorias = new usuarioDaoImpl();
        $origen = 'categorias';
        foreach ($ids as $id) {
            $registro = $categorias->getCategoriaByID($id);
            if ($registro) {

                $logData = $this->arrayToJsonString($registro);
                $success &= $logsdelete->insertarLog($logData, $rut, $origen);
            } else {
                $success = false;
            }
        }

        if ($success) {
            $placeholders = implode(',', array_fill(0, count($ids), '?'));
            $consulta = "DELETE FROM categorias WHERE id = ($placeholders)";
            $stmt = mysqli_prepare($this->db->conec(), $consulta);

            if (!$stmt) {
                return false;
            }
            $types = str_repeat('i', count($ids));
            mysqli_stmt_bind_param($stmt, $types, ...$ids);
            mysqli_stmt_execute($stmt);
            $success &= mysqli_stmt_affected_rows($stmt) > 0;
            mysqli_stmt_close($stmt);
        } else {
            $success = false;
        }

        return $success;
    }

    public function deleteCursos($ids, $rut)
    {
        $logsdelete = new logsEliminacionDaoImpl();
        $success = true;
        $Cursos = new usuarioDaoImpl();
        $origen = 'Cursos';
        foreach ($ids as $id) {
            $registro = $Cursos->getCursobyID($id);
            if ($registro) {

                $logData = $this->arrayToJsonString($registro);
                $success &= $logsdelete->insertarLog($logData, $rut, $origen);
            } else {
                $success = false;
            }
        }

        if ($success) {
            $placeholders = implode(',', array_fill(0, count($ids), '?'));
            $consulta = "DELETE FROM cursos WHERE id = ($placeholders)";
            $stmt = mysqli_prepare($this->db->conec(), $consulta);

            if (!$stmt) {
                return false;
            }
            $types = str_repeat('i', count($ids));
            mysqli_stmt_bind_param($stmt, $types, ...$ids);
            mysqli_stmt_execute($stmt);
            $success &= mysqli_stmt_affected_rows($stmt) > 0;
            mysqli_stmt_close($stmt);
        } else {
            $success = false;
        }

        return $success;
    }

    public function deleteDiccionario($ids, $rut)
    {
        $logsdelete = new logsEliminacionDaoImpl();
        $success = true;
        $diccionario = new usuarioDaoImpl();
        $origen = 'Diccionario';
        foreach ($ids as $id) {
            $registro = $diccionario->getDiccionariobyID($id);
            if ($registro) {

                $logData = $this->arrayToJsonString($registro);
                $success &= $logsdelete->insertarLog($logData, $rut, $origen);
            } else {
                $success = false;
            }
        }

        if ($success) {
            $placeholders = implode(',', array_fill(0, count($ids), '?'));
            $consulta = "DELETE FROM diccionario WHERE id = ($placeholders)";
            $stmt = mysqli_prepare($this->db->conec(), $consulta);

            if (!$stmt) {
                return false;
            }
            $types = str_repeat('i', count($ids));
            mysqli_stmt_bind_param($stmt, $types, ...$ids);
            mysqli_stmt_execute($stmt);
            $success &= mysqli_stmt_affected_rows($stmt) > 0;
            mysqli_stmt_close($stmt);
        } else {
            $success = false;
        }

        return $success;
    }

    public function deletePerfiles($ids)
    {
        $placeholders = implode(',', array_fill(0, count($ids), '?'));
        $consulta = "DELETE FROM perfiles WHERE id = ($placeholders)";
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

    public function deletePublicaciones($ids, $rut)
    {
        $logsdelete = new logsEliminacionDaoImpl();
        $success = true;
        $publicaciones = new usuarioDaoImpl();
        $origen = 'publicaciones';
        foreach ($ids as $id) {
            $registro = $publicaciones->verPublicacionesbyID($id);
            if ($registro) {

                $logData = $this->arrayToJsonString($registro);
                $success &= $logsdelete->insertarLog($logData, $rut, $origen);
            } else {
                $success = false;
            }
        }

        if ($success) {
            $placeholders = implode(',', array_fill(0, count($ids), '?'));
            $consulta = "DELETE FROM ofertas WHERE id = ($placeholders)";
            $stmt = mysqli_prepare($this->db->conec(), $consulta);

            if (!$stmt) {
                return false;
            }
            $types = str_repeat('i', count($ids));
            mysqli_stmt_bind_param($stmt, $types, ...$ids);
            mysqli_stmt_execute($stmt);
            $success &= mysqli_stmt_affected_rows($stmt) > 0;
            mysqli_stmt_close($stmt);
        } else {
            $success = false;
        }

        return $success;
    }

    public function deleteReportes($ids, $rut)
    {
        $logsdelete = new logsEliminacionDaoImpl();
        $success = true;
        $reporte = new usuarioDaoImpl();
        $origen = 'reportes';
        foreach ($ids as $id) {
            $registro = $reporte->getReportesById($id);
            if ($registro) {

                $logData = $this->arrayToJsonString($registro);
                $success &= $logsdelete->insertarLog($logData, $rut, $origen);
            } else {
                $success = false;
            }
        }

        if ($success) {
            $placeholders = implode(',', array_fill(0, count($ids), '?'));
            $consulta = "DELETE FROM reportes WHERE id = ($placeholders)";
            $stmt = mysqli_prepare($this->db->conec(), $consulta);

            if (!$stmt) {
                return false;
            }
            $types = str_repeat('i', count($ids));
            mysqli_stmt_bind_param($stmt, $types, ...$ids);
            mysqli_stmt_execute($stmt);
            $success &= mysqli_stmt_affected_rows($stmt) > 0;
            mysqli_stmt_close($stmt);
        } else {
            $success = false;
        }

        return $success;
    }

    public function deleteUsuarios($ids,$rut)
    {
        $logsdelete = new logsEliminacionDaoImpl();
        $success = true;
        $oferta = new usuarioDaoImpl();
        $origen = 'Usuarios';
        foreach ($ids as $id) {
            $registro = $oferta->getUsuario($id);
            if ($registro) {

                $logData = $this->arrayToJsonString($registro);
                $success &= $logsdelete->insertarLog($logData, $rut, $origen);
            } else {
                $success = false;
            }
        }

        if ($success) {
            $placeholders = implode(',', array_fill(0, count($ids), '?'));
            $consulta = "DELETE FROM usuarios WHERE rut = ($placeholders)";
            $stmt = mysqli_prepare($this->db->conec(), $consulta);

            if (!$stmt) {
                return false;
            }
            $types = str_repeat('s', count($ids));
            mysqli_stmt_bind_param($stmt, $types, ...$ids);
            mysqli_stmt_execute($stmt);
            $success &= mysqli_stmt_affected_rows($stmt) > 0;
            mysqli_stmt_close($stmt);
        } else {
            $success = false;
        }

        return $success;
    }


    public function deleteArchivos($ids, $rut)
    {
        $logsdelete = new logsEliminacionDaoImpl();
        $success = true;
        $cvArchivos = new archivocvDaoImpl();
        $origen = 'cvArchivos';
        foreach ($ids as $id) {
            $registro = $cvArchivos->getDataById($id);
            if ($registro) {

                $logData = $this->arrayToJsonString($registro);
                $success &= $logsdelete->insertarLog($logData, $rut, $origen);
            } else {
                $success = false;
            }
        }
        if ($success) {
            $placeholders = implode(',', array_fill(0, count($ids), '?'));
            $consulta = "DELETE FROM cvarchivos WHERE id = ($placeholders)";
            $stmt = mysqli_prepare($this->db->conec(), $consulta);
            if (!$stmt) {
                return false;
            }
            $types = str_repeat('i', count($ids));
            mysqli_stmt_bind_param($stmt, $types, ...$ids);
            mysqli_stmt_execute($stmt);
            $success &= mysqli_stmt_affected_rows($stmt) > 0;
            mysqli_stmt_close($stmt);
        } else {
            $success = false;
        }
        return $success;
    }

    public function deleteComentarios($ids, $rut)
    {
        $logsdelete = new logsEliminacionDaoImpl();
        $success = true;
        $comentarios = new usuarioDaoImpl();
        $origen = 'Comentarios';
        foreach ($ids as $id) {
            $registro = $comentarios->obtenercomentariosbyID($id);
            if ($registro) {

                $logData = $this->arrayToJsonString($registro);
                $success &= $logsdelete->insertarLog($logData, $rut, $origen);
            } else {
                $success = false;
            }
        }

        if ($success) {
            $placeholders = implode(',', array_fill(0, count($ids), '?'));
            $consulta = "DELETE FROM comentarios WHERE id = ($placeholders)";
            $stmt = mysqli_prepare($this->db->conec(), $consulta);

            if (!$stmt) {
                return false;
            }
            $types = str_repeat('i', count($ids));
            mysqli_stmt_bind_param($stmt, $types, ...$ids);
            mysqli_stmt_execute($stmt);
            $success &= mysqli_stmt_affected_rows($stmt) > 0;
            mysqli_stmt_close($stmt);
        } else {
            $success = false;
        }

        return $success;
    }

    public function deleteOfertas($ids, $rut)
    {
        $logsdelete = new logsEliminacionDaoImpl();
        $success = true;
        $oferta = new ofertaDaoImpl();
        $origen = 'Ofertas';
        foreach ($ids as $id) {
            $registro = $oferta->getDataById($id);
            if ($registro) {

                $logData = $this->arrayToJsonString($registro);
                $success &= $logsdelete->insertarLog($logData, $rut, $origen);
            } else {
                $success = false;
            }
        }

        if ($success) {
            $placeholders = implode(',', array_fill(0, count($ids), '?'));
            $consulta = "DELETE FROM ofertas WHERE id = ($placeholders)";
            $stmt = mysqli_prepare($this->db->conec(), $consulta);

            if (!$stmt) {
                return false;
            }
            $types = str_repeat('i', count($ids));
            mysqli_stmt_bind_param($stmt, $types, ...$ids);
            mysqli_stmt_execute($stmt);
            $success &= mysqli_stmt_affected_rows($stmt) > 0;
            mysqli_stmt_close($stmt);
        } else {
            $success = false;
        }

        return $success;
    }

    public function deletePostulaciones($ids, $rut)
    {
        $logsdelete = new logsEliminacionDaoImpl();
        $success = true;
        $postulaciones = new postulacionesDaoImpl();
        $origen = 'Postulaciones';
        foreach ($ids as $id) {
            $registro = $postulaciones->getData($id);
            if ($registro) {

                $logData = $this->arrayToJsonString($registro);
                $success &= $logsdelete->insertarLog($logData, $rut, $origen);
            } else {
                $success = false;
            }
        }

        if ($success) {
            $placeholders = implode(',', array_fill(0, count($ids), '?'));
            $consulta = "DELETE FROM postulaciones WHERE id = ($placeholders)";
            ;
            $stmt = mysqli_prepare($this->db->conec(), $consulta);

            if (!$stmt) {
                return false;
            }
            $types = str_repeat('i', count($ids));
            mysqli_stmt_bind_param($stmt, $types, ...$ids);
            mysqli_stmt_execute($stmt);
            $success &= mysqli_stmt_affected_rows($stmt) > 0;
            mysqli_stmt_close($stmt);
        } else {
            $success = false;
        }

        return $success;
    }

    public function deleteExpAcademica($ids, $rut)
    {
        $logsdelete = new logsEliminacionDaoImpl();
        $success = true;
        $ExpAcademica = new experienciaacademicaDaoImpl();
        $origen = 'Experiencia Academica';
        foreach ($ids as $id) {
            $registro = $ExpAcademica->obtenerExperienciaAcademicaPorID($id);
            if ($registro) {

                $logData = $this->arrayToJsonString($registro);
                $success &= $logsdelete->insertarLog($logData, $rut, $origen);
            } else {
                $success = false;
            }
        }

        if ($success) {
            $placeholders = implode(',', array_fill(0, count($ids), '?'));
            $consulta = "DELETE FROM experienciaacademica WHERE ID IN ($placeholders)";
            $stmt = mysqli_prepare($this->db->conec(), $consulta);

            if (!$stmt) {
                return false;
            }
            $types = str_repeat('i', count($ids));
            mysqli_stmt_bind_param($stmt, $types, ...$ids);
            mysqli_stmt_execute($stmt);
            $success &= mysqli_stmt_affected_rows($stmt) > 0;
            mysqli_stmt_close($stmt);
        } else {
            $success = false;
        }

        return $success;
    }

    public function arrayToJsonString($array)
    {
        return json_encode($array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }





    public function deleteExpLaboral($ids, $rut)
    {
        $logsdelete = new logsEliminacionDaoImpl();
        $success = true;
        $ExpLaboralDao = new ExperienciaLaboralImpl();
        $origen = 'Experiencia Laboral';
        foreach ($ids as $id) {
            $registro = $ExpLaboralDao->obtenerExperienciaLaboralPorID($id);
            if ($registro) {
                // Convertir array a JSON
                $logData = $this->arrayToJsonString($registro);

                // Insertar el registro de log de eliminación
                $success &= $logsdelete->insertarLog($logData, $rut, $origen);
            } else {
                $success = false;
            }
        }

        if ($success) {
            $placeholders = implode(',', array_fill(0, count($ids), '?'));
            $consulta = "DELETE FROM experiencialaboral WHERE ID IN ($placeholders)";
            $stmt = mysqli_prepare($this->db->conec(), $consulta);

            if (!$stmt) {
                return false;
            }
            $types = str_repeat('i', count($ids));
            mysqli_stmt_bind_param($stmt, $types, ...$ids);
            mysqli_stmt_execute($stmt);
            $success &= mysqli_stmt_affected_rows($stmt) > 0;
            mysqli_stmt_close($stmt);
        } else {
            $success = false;
        }

        return $success;
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
    public function insertPalabra(AdminCategoriasModel $admin)
    {
        $validateQuery = "INSERT INTO diccionario (palabra, active, fechaCreacion) VALUES (?, 1, NOW())";
        $stmt = mysqli_prepare($this->db->conec(), $validateQuery);

        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta: " . mysqli_error($this->db->conec()));
        }

        $palabra = $admin->getNuevaPalabra();
        mysqli_stmt_bind_param($stmt, "s", $palabra);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            return array("success" => true, "message" => "Datos agregados correctamente");
        } else {
            return array("success" => false, "message" => "Error al agregar datos: " . mysqli_stmt_error($stmt));
        }

    }

    public function updateDiccionario($id, $palabra)
    {
        $sql = "update diccionario set palabra = ? where id = ?";
        $stmt = mysqli_prepare($this->db->conec(), $sql);
        mysqli_stmt_bind_param($stmt, "si", $palabra, $id);
        $result = mysqli_stmt_execute($stmt);
        if ($result) {
            $message = "Datos actualizados correctamente";
            $success = true;
        } else {
            $message = "Error al actualizar datos: " . mysqli_stmt_error($stmt);
            $success = false;
        }

        mysqli_stmt_close($stmt); // Cerrar la declaración

        return array("success" => $success, "message" => $message);
    }

    public function updateCategoria($id, $nombre)
    {
        $sql = "update categorias set nombre = ? where id = ?";
        $stmt = mysqli_prepare($this->db->conec(), $sql);
        mysqli_stmt_bind_param($stmt, "si", $nombre, $id);
        $result = mysqli_stmt_execute($stmt);
        if ($result) {
            $message = "Datos actualizados correctamente";
            $success = true;
        } else {
            $message = "Error al actualizar datos: " . mysqli_stmt_error($stmt);
            $success = false;
        }

        mysqli_stmt_close($stmt); // Cerrar la declaración

        return array("success" => $success, "message" => $message);
    }

    public function updateCarrera($idCarrera, $nombreCarrera, $idCategoria)
    {
        $sql = "update carreras set nombre = ?, idcategorias = ? where id = ?";
        $stmt = mysqli_prepare($this->db->conec(), $sql);
        mysqli_stmt_bind_param($stmt, "sii", $nombreCarrera, $idCategoria, $idCarrera);
        $result = mysqli_stmt_execute($stmt);
        if ($result) {
            $message = "Datos actualizados correctamente";
            $success = true;
        } else {
            $message = "Error al actualizar datos: " . mysqli_stmt_error($stmt);
            $success = false;
        }

        mysqli_stmt_close($stmt); // Cerrar la declaración

        return array("success" => $success, "message" => $message);
    }

    public function actualizarUsuario($datos)
    {
        $sql = "UPDATE usuarios SET 
                nombre = ?,
                fechaNacimiento = ?,
                idperfil = ?,
                correo = ?,
                idcarrera = ?,
                avance = ?,
                telefono = ?,
                direccion = ?
                WHERE rut = ?";

        $conn = $this->db->conec(); 
        $stmt = mysqli_prepare($conn, $sql);

        
        if (!$stmt) {
            return false;
        }

        mysqli_stmt_bind_param($stmt, "ssississs",
            $datos['nombre'],
            $datos['fechaNacimiento'],
            $datos['idperfil'],
            $datos['correo'],
            $datos['idcarrera'],
            $datos['avance'],
            $datos['telefono'],
            $datos['direccion'],
            $datos['rut']
        );

        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $success;
    }
}
