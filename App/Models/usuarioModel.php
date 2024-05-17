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
    
    
    }


