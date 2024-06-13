<?php
require_once __DIR__ . '/../usuarioDao.php';
require_once __DIR__ . '/../../../Models/usuario_model.php';
require_once __DIR__ . '/../../../Models/conexion.php';

class usuarioDaoImpl implements UsuarioDao
{

    private $db;

    public function __construct()
    {
        $this->db = new conexion();
    }

    public function insertData(usuario_model $admin)
    {
    }

    public function getUsuario($rut)
    {
        $query = "SELECT * FROM usuarios WHERE rut = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "s", $rut);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // Obtener los datos del usuario
        $usuario = mysqli_fetch_assoc($result);

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $usuario;
    }


    public function subirImagenUsuario(usuario_model $admin)
    {
        $query = "UPDATE usuarios SET imagen = ? WHERE rut = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $query);

        $imagen = $admin->getimagen();
        $rut = $admin->getrut();

        mysqli_stmt_bind_param($stmt, "ss", $imagen, $rut);
        $result = mysqli_stmt_execute($stmt);

        return $result;
    }

    public function obtenerImagenUsuario($rut)
    {
        $query = "SELECT imagen FROM usuarios WHERE rut = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "s", $rut);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $imagenUsuario);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);
        return $imagenUsuario;
    }

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

    public function actualizarDatosUsuario(usuario_model $usuarioModel)
    {
        // Obtener los datos del modelo
        $rut = $usuarioModel->getrut();
        $correo = $usuarioModel->getcorreo();
        $fechaNacimiento = $usuarioModel->getfechaNacimiento();
        echo "Rut: $rut, Correo: $correo, Fecha de Nacimiento: $fechaNacimiento";
        // Preparar la consulta SQL
        $query = "UPDATE usuarios SET correo = ?, fechaNacimiento = ? WHERE rut = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $query);

        // Vincular parámetros y ejecutar la consulta
        mysqli_stmt_bind_param($stmt, "sss", $correo, $fechaNacimiento, $rut);
        $success = mysqli_stmt_execute($stmt);

        // Cerrar la declaración preparada
        mysqli_stmt_close($stmt);

        // Devolver el resultado de la ejecución de la consulta
        return $success;
    }


    public function actualizarUsuario($rut, $camposModificados)
    {
        $setClauses = [];
        $params = [];
        foreach ($camposModificados as $campo => $valor) {
            $setClauses[] = "$campo = ?";
            $params[] = $valor;
        }
        $params[] = $rut;
        $sql = "UPDATE usuarios SET " . implode(', ', $setClauses) . " WHERE rut = ?";
        $conn = $this->db->conec();
        /*line 113*/
        $stmt = mysqli_prepare($conn, $sql);
        if (!$stmt) {
            // Error al preparar la consulta
            echo "Error en la preparación de la consulta: " . mysqli_error($conn);
            return false;
        }
        // Vincula los parámetros
        $types = str_repeat("s", count($params));
        mysqli_stmt_bind_param($stmt, $types, ...$params);

        // Ejecuta la consulta
        $success = mysqli_stmt_execute($stmt);

        if (!$success) {
            // Error al ejecutar la consulta
            echo "Error al ejecutar la consulta: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
        return $success;
    }


    private function executeQuery($sql, $params)
    {
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        $success = mysqli_stmt_execute($stmt);
        return $success;
    }


    public function EliminarUsuario(usuario_model $usuarioModel)
    {

        $rut = $usuarioModel->getrut();
        // Preparar la consulta SQL
        $query = "UPDATE usuarios SET fechaEliminacion WHERE rut = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "s", $rut);
        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $success;
    }


    public function actualizarLikes($publicacionId)
    {
        $admin = new usuarioDaoImpl();
        $cantidadLike = $admin->getLikes($publicacionId);
        $nLikes = $cantidadLike + 1;
        $sql = 'UPDATE publicaciones SET nlikes = ? WHERE id = ?';
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param($stmt, "ii", $nLikes, $publicacionId);
        mysqli_stmt_execute($stmt);

        // Obtener el número de filas afectadas por la consulta UPDATE
        $affectedRows = mysqli_stmt_affected_rows($stmt);

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $affectedRows;
    }


    public function getLikes($publicacionId)
    {
        $sql = 'SELECT nlikes FROM publicaciones WHERE id = ?';
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $publicacionId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $cantidad_likes);
        mysqli_stmt_fetch($stmt);

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $cantidad_likes;
    }

    // reportes

    public function actualizarReportes($publicacionId)
    {
        $admin = new usuarioDaoImpl();
        $cantidadreportes = $admin->getReportes($publicacionId);

        if ($cantidadreportes >= 3) {
            $affectedRows = $admin->deletedAtPublicaciones($publicacionId);
        } else {
            $nreportes = $cantidadreportes + 1;
            $sql = 'UPDATE publicaciones SET nreportes = ? WHERE id = ?';
            $conn = $this->db->conec();
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ii", $nreportes, $publicacionId);
            mysqli_stmt_execute($stmt);
            // Obtener el número de filas afectadas por la consulta UPDATE
            $affectedRows = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }
        return $affectedRows;
    }


    public function getReportes($publicacionId)
    {
        $sql = 'SELECT nreportes FROM publicaciones WHERE id = ?';
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $publicacionId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $cantidad_reportes);
        mysqli_stmt_fetch($stmt);

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $cantidad_reportes;
    }

    public function deletedAtPublicaciones($publicacionId)
    {
        $sql = 'UPDATE publicaciones SET fechaEliminacion = NOW() WHERE id = ?';
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $publicacionId);
        mysqli_stmt_execute($stmt);
        $affectedRows = mysqli_stmt_affected_rows($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return $affectedRows;

    }

    public function obtenercomentarios($publicacionId) {
        $sql = '
            SELECT comentarios.*, usuarios.nombre 
            FROM comentarios 
            JOIN usuarios ON comentarios.rutusuario = usuarios.rut 
            WHERE comentarios.idpublicacion = ? 
              AND comentarios.fechaEliminacion IS NULL
        ';
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $publicacionId);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $comentarios = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $comentarios[] = $row;
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return $comentarios;
    }
    

    public function insertarComentario($publicacionId, $rutusuario, $comentario) {
        $sql = 'INSERT INTO comentarios (idpublicacion, rutusuario, comentario, fechaCreacion) VALUES (?, ?, ?, NOW())';
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "iss", $publicacionId, $rutusuario, $comentario);
        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    
        return $success;
    }
    
}