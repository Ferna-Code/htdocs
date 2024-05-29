<?php
require_once __DIR__ . '/../supervidorDao.php';
require_once __DIR__ . '/../../../Models/supervisorModel.php';
require_once __DIR__ . '/../../../Models/conexion.php';

class SupervisorDaoImpl implements SupervidorDao
{

    private $db;

    public function __construct()
    {
        $this->db = new conexion();
    }

    public function insertData(SupervisorModel $admin)
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

    public function insertCurso(SupervisorModel $admin)
    {
        $validateQuery = "INSERT INTO cursos (nombre, descripcion, emitidopor, linkpostular, idcategoria, fechaCreacion, activo) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($this->db->conec(), $validateQuery);

        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta: " . mysqli_error($this->db->conec()));
        }

        $nombre = $admin->getNombreCurso();
        $descripcion = $admin->getDescripcionCurso();
        $emitido = "Supervisor";
        $link = $admin->getLink();
        $categoria = $admin->getCategoriaCurso();
        $fecha = $admin->getFechaInicio();
        $activo = $admin->getactivo();

        mysqli_stmt_bind_param($stmt, "sssssss", $nombre, $descripcion, $emitido, $link, $categoria, $fecha, $activo);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {


            return array("success" => true, "message" => "Datos agregados correctamente");
        } else {
            return array("success" => false, "message" => "Error al agregar datos: " . mysqli_stmt_error($stmt));
        }
    }

    public function insertPerfil(SupervisorModel $admin)
    {
        $validateQuery = "INSERT INTO perfiles (nombre, fechaCreacion, activo) VALUES (?, NOW(), 1)";

        $stmt = mysqli_prepare($this->db->conec(), $validateQuery);

        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta: " . mysqli_error($this->db->conec()));
        }

        $Perfil = $admin->getPerfil();

        mysqli_stmt_bind_param($stmt, "s", $Perfil);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            return array("success" => true, "message" => "Datos agregados correctamente");
        } else {
            return array("success" => false, "message" => "Error al agregar datos: " . mysqli_stmt_error($stmt));
        }
    }

    public function insertPalabra(SupervisorModel $admin) {
        $validateQuery = "INSERT INTO diccionario (palabra, active, fechaCreacion) VALUES (?, 1, NOW())";
        $stmt = mysqli_prepare($this->db->conec(), $validateQuery);
    
        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta: " . mysqli_error($this->db->conec()));
        }
    
        $palabra = $admin->getPalabra();
        mysqli_stmt_bind_param($stmt, "s", $palabra);
        $result = mysqli_stmt_execute($stmt);
    
        if ($result) {
            // Consulta para obtener las palabras actualizadas
            $consultaPalabra = "SELECT palabra, fechaCreacion, fechaEliminacion FROM diccionario";
            $resultado = mysqli_query($this->db->conec(), $consultaPalabra);
    
            if (!$resultado) {
                var_dump(mysqli_error($this->db->conec()));
                return array("success" => false, "message" => "Error al obtener los datos: " . mysqli_stmt_error($stmt));
            }
    
            $palabras = array();
            while($row = mysqli_fetch_assoc($resultado)) {
                $palabras[] = $row;
            }
    
            return array("success" => true, "message" => "Actualización exitosa", "palabras" => $palabras);
        } else {
            return array("success" => false, "message" => "Error al agregar datos: " . mysqli_stmt_error($stmt));
        }
    }

    public function getPalabra() {
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
    


    public function claveAleatoria($length = 10)
    {
        return substr(str_shuffle(str_repeat($x = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz', ceil($length / strlen($x)))), 1, $length);
    }

    public function insertUsuario(SupervisorModel $admin)
    {
        //CREAR VERIFICACION SI EXISTE USUARIO O NO ANTES DE AGREGAR EL DATO
        $validateQuery = "INSERT INTO usuarios (rut, nombre, fechaNacimiento, idperfil, correo, idcarrera, avance, cargo, clave, fechaCreacion, activo, telefono, direccion) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?, ?, ?)";

        $stmt = mysqli_prepare($this->db->conec(), $validateQuery);

        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta: " . mysqli_error($this->db->conec()));
        }
        //get
        $rut = $admin->getRut();
        $nombre = $admin->getNombreUsuario();
        $nacimiento = $admin->getNacimiento();
        $correo = $admin->getCorreo();
        $carrera = $admin->getCarrera();
        $avance = $admin->getAvance();
        $cargo = $admin->getCargoUsuario();
        $estado = $admin->getEstado();
        $direccion = $admin->getDireccion();
        $telefono = $admin->getTelefono();
        $perfil = $admin->getPerfilUsuario();
        $clave = $this->claveAleatoria();

        mysqli_stmt_bind_param($stmt, "ssssssssssss", $rut, $nombre, $nacimiento, $perfil, $correo, $carrera, $avance, $cargo, $clave, $estado, $telefono, $direccion);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            return array("success" => true, "message" => "Datos agregados correctamente");
        } else {
            return array("success" => false, "message" => "Error al agregar datos: " . mysqli_stmt_error($stmt));
        }
    }
}