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

    public function actualizarDatosUsuario(usuario_model $usuarioModel)
    {
        // Obtener los datos del modelo
        $rut = $usuarioModel->getrut();
        $correo = $usuarioModel->getcorreo();
        $fechaNacimiento = $usuarioModel->getfechaNacimiento();
        // Y así sucesivamente con los demás campos que deseas actualizar
        // Imprimir los valores para depuración
        echo "Rut: $rut, Correo: $correo, Fecha de Nacimiento: $fechaNacimiento";
        // Preparar la consulta SQL
        $query = "UPDATE usuarios SET correo = ?, fechaNacimiento = ? WHERE rut = ?";
        $conn = $this->db->conec(); // Asumiendo que $this->db->conec() es tu conexión a la base de datos
        $stmt = mysqli_prepare($conn, $query);

        // Vincular parámetros y ejecutar la consulta
        mysqli_stmt_bind_param($stmt, "sss", $correo, $fechaNacimiento, $rut);
        $success = mysqli_stmt_execute($stmt);

        // Cerrar la declaración preparada
        mysqli_stmt_close($stmt);

        // Devolver el resultado de la ejecución de la consulta
        return $success;
    }




}