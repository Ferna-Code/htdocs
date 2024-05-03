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
    }

    public function verUsuarios()
    {
        $consulta = mysqli_query($this->db, "SELECT * FROM Usuarios");
        while ($filas = mysqli_fetch_array($consulta)) {
            $this->Usuario[] = $filas;
        }
        return $this->Usuario;
    }
}