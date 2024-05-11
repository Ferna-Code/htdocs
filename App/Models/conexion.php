<?php 

class conexion{
    private $con;
    private $user;
    private $password;
    private $host;
    private $db_name;
    public function __construct(){
        $this->user = 'root';
        $this->password = '';
        $this->host = 'localhost';
        $this->db_name = 'redleones';
        
    }

    public function conec(){
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->db_name) or die(mysqli_error($this->con));
        return $this->con;
    }

}
