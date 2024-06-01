<?php
require_once __DIR__ . '/../experciencialaboralDAO.php';
require_once __DIR__ . '/../../../Models/experciencialaboral_model.php';
require_once __DIR__ . '/../../../Models/conexion.php';
require_once __DIR__ . '/../../../Models/usuario_model.php';

class experciencialaboralDaoImpl implements experciencialaboralDao
{

    private $db;

    public function __construct()
    {
        $this->db = new conexion();
    }

    public function getData(experciencialaboral_model $admin)
    {
        $rutusuario = $admin->getRutusuario();
        $sql = "SELECT ID	,rutusuario	,fechadesde	,fechahasta	,puesto	,Descripcion	,trabajaactualmente	,fechaCreacion	,activo	,fechaEliminacion FROM expercienciaacademica WHERE rutusuario = ? and fechaEliminacion is null";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $rutusuario);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        $exacademica = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $exacademica[] = $row;
        }
    
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    
        return $exacademica;
    }
}