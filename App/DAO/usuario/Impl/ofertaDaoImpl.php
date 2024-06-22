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
        $sql = "SELECT id, tipoOferta, idcategoria, cargo, nombreEmpresa, rutempresa, correocontacto, descripcion, rangosalarial, fechacreacion, fechaeliminacion FROM ofertas WHERE activate = 1";
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

    public function getDataById($id)
    {
        $sql = "SELECT id, tipoOferta, idcategoria, cargo, nombreEmpresa, rutempresa, correocontacto, descripcion, rangosalarial, fechacreacion, fechaeliminacion FROM ofertas WHERE id = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $ofert = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $ofert[] = $row;
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return $ofert;
    }

    public function getofertById($id) {
        $sql = "SELECT id, tipoOferta, idcategoria, cargo, nombreEmpresa, rutempresa, correocontacto, descripcion, rangosalarial, fechacreacion, fechaeliminacion FROM ofertas WHERE id = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    
        $ofert = mysqli_fetch_assoc($result);
        if ($ofert === null) {
            error_log("Error: No se encontró ninguna oferta con id $id");
        }
    
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return $ofert;
    }
    
}

