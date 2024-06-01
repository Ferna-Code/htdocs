<?php
require_once __DIR__ . '/../ofertasDAO.php';
require_once __DIR__ . '/../../../Models/empresa_model.php';
require_once __DIR__ . '/../../../Models/conexion.php';
require_once __DIR__ . '/../../../Models/usuario_model.php';

class ofertaDaoImpl implements ofertaDao
{

    private $db;

    public function __construct()
    {
        $this->db = new conexion();
    }

    public function getData()
    {
        $sql = "SELECT id, tipoOferta, idcategoria, cargo, nombreEmpresa, rutempresa, correocontacto, descripcion, rangosalarial, fechacreacion, fechaeliminacion FROM ofertas WHERE fechaEliminacion IS NULL";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $ofertas = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $ofertas[] = $row;
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return $ofertas;
    }
    
}