<?php

require_once __DIR__ . '/Models/insert_model.php';

class Database
{
    private $host;
    private $dbname;
    private $dbuser;
    private $dbpass;
    private $conn;

    public function __construct()
    {
        $this->host = db_host;
        $this->dbname = db_name;
        $this->dbuser = db_user;
        $this->dbpass = de_pass;
        $this->connect();
    }

    protected function connect()//generamos la coneccion a la base de datos
    {
        $this->conn = new mysqli($this->host, $this->dbuser, $this->dbpass);

        if ($this->conn->connect_error) {
            die ("Conexión fallida: " . $this->conn->connect_error);
        }

        // Verifica si $this->dbname tiene un valor antes de ejecutar la consulta
        if (!empty ($this->dbname)) {
            $sql = 'CREATE DATABASE IF NOT EXISTS ' . $this->dbname;

            if (!$this->conn->query($sql)) {
                die ("Error al crear la base de datos: " . $this->conn->error);
            }

            // Selecciona la base de datos después de haberla creado
            if (!$this->conn->select_db($this->dbname)) {
                die ("Error al seleccionar la base de datos: " . $this->conn->error);
            }
        }
    }

    public function query($sql) {
        $result = $this->conn->query($sql);
        if ($result === FALSE) {
            die("Error en la consulta: " . $this->conn->error);
        }
        return $result;
    }
    
    public function getConnection(){
        return $this->conn;
    }

    public function close(){
        $this->conn->close();
    }

    //agregamos las tablas que se crean al iniciar la app
    public function createTableAndInsert(){

        $controData = new Insert_model();
        $controData->createPerfiles();

    }
}