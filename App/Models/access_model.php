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

    function validateUser($rut, $clave)//obtenemos los datos de ingreso
    {
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            return false;
        }
       

        $rut = mysqli_real_escape_string($this->db->getConnection(), $rut);
        $clave = mysqli_real_escape_string($this->db->getConnection(), $clave);
        // `mysqli_real_escape_string()` Esta es una función provista por la extensión
        //  MySQL Improved (`mysqli`) de PHP. Se utiliza para escapar caracteres especiales
        //  en una cadena para que pueda ser utilizada de forma segura en una consulta SQL.
        //  Esto es importante para prevenir inyecciones SQL, un tipo común de ataque en
        //  el que un atacante inserta código malicioso en las consultas SQL de una aplicación.

        $tableName = "usuarios";
        $validateQuery = "SELECT idperfil FROM $tableName WHERE rut = ? and clave = ?";

        $stmt = mysqli_prepare($this->db->getConnection(), $validateQuery);
        mysqli_stmt_bind_param($stmt, 'ss', $rut, $clave);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (!$result) {
            error_log("Error en la consulta: " . mysqli_error($this->db->getConnection()));
            return false;
        }

        $row = mysqli_fetch_assoc($result);
        mysqli_stmt_close($stmt);

        if ($row && isset ($row['idperfil'])) {
            $this->nivelUsuario = $row['idperfil'];
            return true;
        }

        return false;
    }

    

}