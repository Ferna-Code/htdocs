<?php
require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/error_model.php';

class Insert_model
{
    private $db;
    private $error;

    public function __construct()
    {
        $this->error = new Error_model();
        $this->db = new Database();
    }


    //CREATE TABLES
    public function createPerfiles()
    {
        $tableName = 'Perfiles';

        $buildTable = "CREATE TABLE IF NOT EXISTS $tableName(
                rut varchar(10) primary key not null,
                nombre varchar(50) not null,
                apellido varchar(50) not null,
                nivel int not null,
                curriculum varchar(100) null
            )";

        $Create = mysqli_query($this->db->getConnection(), $buildTable);
        $this->error->handlerErrorBBDD($Create, $tableName);
        $this->insertDefaultDataPerfiles($tableName);

        return true;
    }
    //INSERT DATA

    private function insertDefaultDataPerfiles($tableName)
    {
        $defaultData = "INSERT INTO $tableName(rut, nombre, apellido, nivel) 
            values
            ('11111111-2', 'Oscar', 'Godoy', 1),
            ('22222222-3', 'Jose', 'Fuentes', 2),
            ('33333333-4', 'pedro', 'Lopez', 3)";

        $InsertData = mysqli_query($this->db->getConnection(), $defaultData);

        $this->error->handlerErrorBBDD($InsertData, $tableName);
    }
}