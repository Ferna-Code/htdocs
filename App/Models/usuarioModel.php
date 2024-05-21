<?php
require_once __DIR__ . '/../Database.php';

class usuarioModel
{
    private $db;
    private $publicacionesModel;
    private $usuario;

    public function __construct($db)
    {
        $this->db = $db;
        $this->publicacionesModel = array();
        $this->usuario = array();
    }

    public function verUsuarios()
    {
        $usuarios = array();
        $consulta = mysqli_query($this->db->getConnection(), "SELECT * FROM usuarios");
        while ($fila = mysqli_fetch_assoc($consulta)) {
            $usuarios[] = $fila;
        }
        return $usuarios;
    }

    public function verUsuariosRut($rut)
    {
        $usuarios = array();
        $query = "SELECT * FROM usuarios WHERE rut = ?";
        if ($stmt = mysqli_prepare($this->db->getConnection(), $query)) {
            mysqli_stmt_bind_param($stmt, "s", $rut);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while ($fila = mysqli_fetch_assoc($result)) {
                $usuarios[] = $fila;
            }
            mysqli_stmt_close($stmt);
        }
        return $usuarios;
    }

    public function subirImagenUsuario($imagen, $rut)
    {
        $query = "UPDATE usuarios SET imagen = ? WHERE rut = ?";
        if ($stmt = mysqli_prepare($this->db->getConnection(), $query)) {
            mysqli_stmt_bind_param($stmt, "ss", $imagen, $rut);
            if (mysqli_stmt_execute($stmt)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function obtenerRutaImagen($rut) {
        $query = "SELECT imagen FROM usuarios WHERE rut = ?";
        if ($stmt = mysqli_prepare($this->db->getConnection(), $query)) {
            mysqli_stmt_bind_param($stmt, "s", $rut);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $imagen);
            mysqli_stmt_fetch($stmt);
            mysqli_stmt_close($stmt);
            return $imagen;
        } else {
            return false;
        }
    }

}


