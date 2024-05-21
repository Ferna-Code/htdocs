<?php
require("./App/Models/conexion.php");
class SupervisorModel
{
    private $conexion;
    private $dbConnectio;
    public function __construct()
    {
        $this->conexion = new conexion();
        $this->dbConnectio  = $this->conexion->conec();
    }

    public function addCategoria($data)
    {
     
        $consulta = "INSERT INTO categorias(nombre, fechaCreacion) VALUES (?, NOW())";
        $consultPrepare = mysqli_prepare($this->dbConnectio, $consulta);

        if ($consultPrepare) {
            mysqli_stmt_bind_param($consultPrepare, "s", $data);
            $ejecutar = mysqli_stmt_execute($consultPrepare);
            mysqli_stmt_close($consultPrepare);
            if ($ejecutar) {
                return "agregado";
            } else {
                return "no agregado";
            }
        } else {
            return "Error al cargar el SQL";
        }
    }

    public function getCategoria(){
        $consulta = "SELECT * FROM categorias";
        
    }
}
