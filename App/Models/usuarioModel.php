<?php
require_once("conexion.php");
class Usuario
{
    private $rut;
    private $nombre;
    private $fechaNacimiento;
    private $idperfil;
    private $correo;
    private $idcarrera;
    private $avance;
    private $cargo;
    private $clave;
    private $fechaCreacion;
    private $activo;
    private $fechaEliminacion;

    private $db;
    private $usuario;
    public function __construct()
    {
        
        $this->db = getConnection();
        $this->rut = "";
        $this->nombre = "";
        $this->fechaNacimiento = "";
        $this->idperfil = "";
        $this->correo = "";
        $this->idcarrera = "";
        $this->avance = "";
        $this->cargo = "";
        $this->fechaCreacion = "";
        $this->activo = "";
        $this->fechaEliminacion = "";
        $this->usuario = array();
    }

    public function verUsuario($rut)
    {
        $link = $this->db;
        $query = mysqli_prepare($link,"SELECT * FROM Usuarios where rut = ?");
        mysqli_stmt_bind_param($query, "s", $rut);
        if (mysqli_stmt_execute($query)) {
            mysqli_stmt_bind_result($query,$rut,$nombre,$fechaNacimiento,$idPerfil,$correo,$idCarrera,$avance);
            return array(
            'rut' => $rut, 
            'nombre' => $nombre, 
            'fechaNacimiento' =>$fechaNacimiento,
            'idPerfil' => $idPerfil,
            'correo' =>$correo,
            'idCarrera' =>$idCarrera,
            'avance' =>$avance);
        }
        mysqli_stmt_close($query);
        return false;

    }
}