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
    public function getCategoria($limit = 10) {
        $consulta = "SELECT * 
        FROM categorias 
        WHERE fechaEliminacion IS NULL 
        ORDER BY id DESC 
        LIMIT ?;";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit); // Vincular el parámetro del límite
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

    public function getCarrera($limit = 10) {
        $consulta = "SELECT * 
        FROM carreras 
        WHERE fechaEliminacion IS NULL 
        ORDER BY id DESC 
        LIMIT ?;";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit); // Vincular el parámetro del límite
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

    public function insertCurso(SupervisorModel $admin)
    {
        $validateQuery = "INSERT INTO cursos (nombre, descripcion, emitidopor, linkpostular, idcategoria, fechaCreacion, fechaEliminacion, activo) 
                          VALUES (?, ?, ?, ?, ?, NOW(), DATE_ADD(NOW(), INTERVAL 3 MONTH), ?)";
    
        $stmt = mysqli_prepare($this->db->conec(), $validateQuery);
    
        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta: " . mysqli_error($this->db->conec()));
        }
    
        $nombre = $admin->getNombreCurso();
        $descripcion = $admin->getDescripcionCurso();
        $emitido = $admin->getCentro();
        $link = $admin->getLink();
        $categoria = $admin->getCategoriaCurso();
        $activo = $admin->getActivo(); // Ajustado a getActivo(), asegúrate de que el método en SupervisorModel sea correcto
    
        mysqli_stmt_bind_param($stmt, "sssssi", $nombre, $descripcion, $emitido, $link, $categoria, $activo);
        $result = mysqli_stmt_execute($stmt);
    
        if ($result) {
            return array("success" => true, "message" => "Datos agregados correctamente");
        } else {
            return array("success" => false, "message" => "Error al agregar datos: " . mysqli_stmt_error($stmt));
        }
    }
    
    
    public function getCurso($limit = 10) {
        $consulta = "SELECT * FROM cursos WHERE fechaEliminacion IS NULL ORDER BY id DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit); // Vincular el parámetro del límite
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    
        if (mysqli_num_rows($result) === 0) {
            return array("success" => false, "message" => "No se encontraron datos");
        }
        
        $datos = [];
        while($row = mysqli_fetch_assoc($result)) {
            $datos[] = $row;
        }
        
        mysqli_stmt_close($stmt);
        return $datos;
    }

    public function getCursoById($id)
    {
        $sql = "SELECT * FROM cursos WHERE id = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $data = mysqli_fetch_assoc($result); // Asegúrate de obtener una sola fila de resultados
        
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return $data;
    }

    public function getUsuarioByRut($rut) {
        $sql = "SELECT * FROM usuarios WHERE rut = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $rut); // Cambiado a "s" para string
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $data = mysqli_fetch_assoc($result); // Asegúrate de obtener una sola fila de resultados
        
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return $data;
    }
    public function getOfertaById($id) {
        $sql = "SELECT * FROM ofertas WHERE id = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id); // Cambiado a "s" para string
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $data = mysqli_fetch_assoc($result); // Asegúrate de obtener una sola fila de resultados
        
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return $data;
    }
    public function getPublicacionById($id){
        $sql = "SELECT * FROM publicaciones WHERE id = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id); // Cambiado a "s" para string
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $data = mysqli_fetch_assoc($result); // Asegúrate de obtener una sola fila de resultados
        
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return $data;
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

    public function getPalabra($limit = 10) {
        $consulta = "SELECT * FROM diccionario WHERE fechaEliminacion IS NULL ORDER BY id DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit); // Vincular el parámetro del límite
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

    public function getPublicacion($limit = 10) {
        $consulta = "SELECT * FROM publicaciones WHERE fechaEliminacion IS NULL ORDER BY id DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit); // Vincular el parámetro del límite
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    
        if (mysqli_num_rows($result) === 0) {
            return array("success" => false, "message" => "No se encontraron datos");
        }
        
        $datos = [];
        while($row = mysqli_fetch_assoc($result)) {
            $datos[] = $row;
        }
        mysqli_stmt_close($stmt);
        return $datos;
    }
    public function getReporte($limit = 10) {
        $consulta = "SELECT * FROM reportes WHERE fechaEliminacion IS NULL ORDER BY id DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit); // Vincular el parámetro del límite
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    
        if (mysqli_num_rows($result) === 0) {
            return array("success" => false, "message" => "No se encontraron datos");
        }
        
        $datos = [];
        while($row = mysqli_fetch_assoc($result)) {
            $datos[] = $row;
        }
        mysqli_stmt_close($stmt);
        return $datos;
    }
    public function getOferta($limit = 10) {
        $consulta = "SELECT * FROM ofertas ORDER BY id DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit); // Vincular el parámetro del límite
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    
        if (mysqli_num_rows($result) === 0) {
            return array("success" => false, "message" => "No se encontraron datos");
        }
        
        $datos = [];
        while($row = mysqli_fetch_assoc($result)) {
            $datos[] = $row;
        }
        mysqli_stmt_close($stmt);
        return $datos;
    }
    public function getPerfil($limit = 10) {
        $consulta = "SELECT * FROM perfiles WHERE fechaEliminacion IS NULL ORDER BY id DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit); // Vincular el parámetro del límite
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    
        if (mysqli_num_rows($result) === 0) {
            return array("success" => false, "message" => "No se encontraron datos");
        }
        
        $datos = [];
        while($row = mysqli_fetch_assoc($result)) {
            $datos[] = $row;
        }
        mysqli_stmt_close($stmt);
        return $datos;
    }
    public function getUsuario($limit = 10) {
        $consulta = "SELECT * FROM usuarios WHERE fechaEliminacion IS NULL ORDER BY fechaCreacion DESC LIMIT ?";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
        if (!$stmt) {
            return array("success" => false, "message" => "Error en la busqueda");
        }
        mysqli_stmt_bind_param($stmt, "i", $limit); // Vincular el parámetro del límite
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    
        if (mysqli_num_rows($result) === 0) {
            return array("success" => false, "message" => "No se encontraron datos");
        }
        
        $datos = [];
        while($row = mysqli_fetch_assoc($result)) {
            $datos[] = $row;
        }
        mysqli_stmt_close($stmt);
        return $datos;
    }

    public function deleteCategoria($ids) {
        $consulta = "UPDATE  categorias  SET fechaEliminacion = NOW() WHERE id IN (" . implode(',', array_fill(0, count($ids), '?')) . ")";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
        if (!$stmt) {
            return false;
        }
    
        $types = str_repeat('i', count($ids));
        mysqli_stmt_bind_param($stmt, $types, ...$ids);
    
        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    
        return $success;
    }

    public function deleteCarrera($ids) {
        $consulta = "UPDATE carreras SET fechaEliminacion = NOW() WHERE id IN (" . implode(',', array_fill(0, count($ids), '?')) . ")";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
        if (!$stmt) {
            return false;
        }
    
        $types = str_repeat('i', count($ids));
        mysqli_stmt_bind_param($stmt, $types, ...$ids);
    
        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    
        return $success;
    }
    public function deleteCurso($ids) {
        $consulta = "UPDATE cursos SET fechaEliminacion = NOW() WHERE id IN (" . implode(',', array_fill(0, count($ids), '?')) . ")";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
        if (!$stmt) {
            return false;
        }
    
        $types = str_repeat('i', count($ids));
        mysqli_stmt_bind_param($stmt, $types, ...$ids);
    
        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    
        return $success;
    }
    public function deletePublicacion($ids) {
        $consulta = "UPDATE publicaciones SET fechaEliminacion = NOW() WHERE id IN (" . implode(',', array_fill(0, count($ids), '?')) . ")";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
        if (!$stmt) {
            return false;
        }
    
        $types = str_repeat('i', count($ids));
        mysqli_stmt_bind_param($stmt, $types, ...$ids);
    
        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    
        return $success;
    }
    public function deleteReporte($ids) {
        $consulta = "UPDATE reportes SET fechaEliminacion = NOW() WHERE id IN (" . implode(',', array_fill(0, count($ids), '?')) . ")";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
        if (!$stmt) {
            return false;
        }
    
        $types = str_repeat('i', count($ids));
        mysqli_stmt_bind_param($stmt, $types, ...$ids);
    
        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    
        return $success;
    }
    public function deleteOfertas($ids) {
        $consulta = "UPDATE ofertas SET fechaeliminacion = NOW() WHERE id IN (" . implode(',', array_fill(0, count($ids), '?')) . ")";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
        if (!$stmt) {
            return false;
        }
    
        $types = str_repeat('i', count($ids));
        mysqli_stmt_bind_param($stmt, $types, ...$ids);
    
        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    
        return $success;
    }
    public function deletePerfil($ids) {
        $consulta = "UPDATE perfiles SET fechaEliminacion = NOW() WHERE id IN (" . implode(',', array_fill(0, count($ids), '?')) . ")";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
        if (!$stmt) {
            return false;
        }
    
        $types = str_repeat('i', count($ids));
        mysqli_stmt_bind_param($stmt, $types, ...$ids);
    
        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    
        return $success;
    }
    public function deleteUsuario($ids) {
        $consulta = "UPDATE usuarios SET fechaEliminacion = NOW() WHERE rut IN (" . implode(',', array_fill(0, count($ids), '?')) . ")";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
        if (!$stmt) {
            return false;
        }
    
        $types = str_repeat('i', count($ids));
        mysqli_stmt_bind_param($stmt, $types, ...$ids);
    
        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    
        return $success;
    }
    public function deletePalabra($ids) {
        $consulta = "UPDATE diccionario SET fechaEliminacion = NOW() WHERE id IN (" . implode(',', array_fill(0, count($ids), '?')) . ")";
        $stmt = mysqli_prepare($this->db->conec(), $consulta);
    
        if (!$stmt) {
            return false;
        }
    
        $types = str_repeat('i', count($ids));
        mysqli_stmt_bind_param($stmt, $types, ...$ids);
    
        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    
        return $success;
    }

    //-----------------UPDATE--------------

    public function updateCurso(SupervisorModel $admin) {
        $updateQuery = "UPDATE cursos SET nombre=?, descripcion=?, emitidopor=?, fechaCreacion=?, idcategoria=? WHERE id=?";
    
        $stmt = mysqli_prepare($this->db->conec(), $updateQuery);
    
        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta: " . mysqli_error($this->db->conec()));
        }
    
        $id = $admin->getIdCurso();
        $nombre = $admin->getNombreCurso();
        $descripcion = $admin->getDescripcionCurso();
        $centro = $admin->getCentro();
        
        $fecha = $admin->getFechaInicio();
       
        $categoria = $admin->getCategoriaCurso();
    
        mysqli_stmt_bind_param($stmt, "sssssi", $nombre, $descripcion, $centro, $fecha, $categoria, $id);
        $result = mysqli_stmt_execute($stmt);
    
        if ($result) {
            return array("success" => true, "message" => "Datos actualizados correctamente");
        } else {
            return array("success" => false, "message" => "Error al actualizar datos: " . mysqli_stmt_error($stmt));
        }
    }
    public function updateUsuario(SupervisorModel $admin) {
        $updateQuery = "UPDATE usuarios SET idperfil=?, telefono=?, direccion=?, correo=? WHERE rut=?";
    
        $stmt = mysqli_prepare($this->db->conec(), $updateQuery);
    
        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta: " . mysqli_error($this->db->conec()));
        }
    
        $rut = $admin->getRut();
        $perfil = $admin->getPerfilUsuario();
        $telefono = $admin->getTelefono();
        $direccion = $admin->getDireccion();
        $correo = $admin->getCorreo();

        mysqli_stmt_bind_param($stmt, "sssss", $perfil, $telefono, $direccion, $correo, $rut);
        $result = mysqli_stmt_execute($stmt);
    
        if ($result) {
            return array("success" => true, "message" => "Datos actualizados correctamente");
        } else {
            return array("success" => false, "message" => "Error al actualizar datos: " . mysqli_stmt_error($stmt));
        }
    }
}
