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

    function validateUser($nombre, $rut)//obtenemos los datos de ingreso
    {
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            return false;
        }
        echo "Nombre: " . $nombre . "<br>";
        echo "RUT: " . $rut . "<br>";

        $rut = mysqli_real_escape_string($this->db->getConnection(), $rut);
        $nombre = mysqli_real_escape_string($this->db->getConnection(), $nombre);
        //$claveHasheada = hash('sha256', $clave);

        $tableName = "usuarios";
        $validateQuery = "SELECT cargo FROM $tableName WHERE nombre = ? and rut = ?";

        $stmt = mysqli_prepare($this->db->getConnection(), $validateQuery);
        mysqli_stmt_bind_param($stmt, 'ss', $nombre, $rut);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (!$result) {
            error_log("Error en la consulta: " . mysqli_error($this->db->getConnection()));
            return false;
        }

        $row = mysqli_fetch_assoc($result);
        mysqli_stmt_close($stmt);

        if ($row && isset ($row['cargo'])) {
            $this->nivelUsuario = $row['cargo'];
            return true;
        }

        return false;
    }

    

}