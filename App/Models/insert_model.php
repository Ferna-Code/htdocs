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
               id int auto_increment primary key,
               descripcion varchar(255) not null,
               fecha_creacion date not null,
               fecha_eliminacion date null
            )";

        $Create = mysqli_query($this->db->getConnection(), $buildTable);
        $this->error->handlerErrorBBDD($Create, $tableName);
        $this->insertDefaultDataPerfiles($tableName);

        return true;
    }
    //INSERT DATA

    private function insertDefaultDataPerfiles($tableName)
    {
        $defaultData = "INSERT INTO $tableName(descripcion, fecha_creacion) 
            values
            ('Administrador', NOW()),
            ('Supervisor', NOW()),
            ('Usuario', NOW())";

        $InsertData = mysqli_query($this->db->getConnection(), $defaultData);

        $this->error->handlerErrorBBDD($InsertData, $tableName);
    }
}