<?php

require_once __DIR__ . '/../Database.php';
require_once("./App/Models/conexion.php");

class Access_model
{
    private $db;
    private $nivelUsuario;
    private $con;

    public function __construct()
    {
        $this->db = new Database();
        $this->con = new conexion();
    }

    public function getNivelUsuario()
    {
        return $this->nivelUsuario;
    }

       function iniciarSesion($rut, $clave)
    {
        $link = $this->con->conec();
        $query = mysqli_prepare($link, "SELECT rut, idperfil, clave FROM usuarios WHERE rut = ?");
        if (!$query) {
            error_log('Error en la preparación de la consulta: ' . mysqli_error($link));
            return false;
        }
        mysqli_stmt_bind_param($query, "s", $rut);
        if (mysqli_stmt_execute($query)) {
            mysqli_stmt_bind_result($query, $resultadorut, $idPerfil, $resultadoClave);
            if (mysqli_stmt_fetch($query)) {
                if ($resultadorut === $rut && $resultadoClave === $clave) {
                    mysqli_stmt_close($query);
                    return array('idperfil' => $idPerfil,'rut' => $resultadorut);
                }
            }
        }
        mysqli_stmt_close($query);
        return false;
    }
}