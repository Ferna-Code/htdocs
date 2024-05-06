<?php

require_once __DIR__ . '/../Database.php';

class Access_model
{
    private $db;
    private $nivelUsuario;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getNivelUsuario()
    {
        return $this->nivelUsuario;
    }

    public function createTable()
    {
        $this->db->createTableAndInsert();
    }

    public function tableExists($tableName){
        //Verificamos si la tabla existe
        $queryCheck = "SHOW TABLES LIKE '$tableName'";
        $verify = mysqli_query($this->db->getConnection(), $queryCheck);

        return ($verify && mysqli_num_rows($verify) > 0);
    }

    function iniciarSesion($rut, $clave)
    {
        $link = $this->db->getConnection();
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
                    return array('idperfil' => $idPerfil);
                }
            }
        }
        mysqli_stmt_close($query);
        return false;
    }
}