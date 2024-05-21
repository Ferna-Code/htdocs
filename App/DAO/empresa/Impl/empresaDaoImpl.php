<?php
require_once __DIR__ . '/../empresaDao.php';
require_once __DIR__ . '/../../../Models/empresa_model.php';
require_once __DIR__ . '/../../../Models/conexion.php';


class EmpresaDaoImpl implements EmpresaDao{
    private $db;

    public function __construct(){
        $this->db = new conexion();
    }

    public function insertData(Empresa_model $admin){
        $validateQuery = "INSERT INTO ofertas(tipoOferta, idcategoria, cargo, nombreEmpresa, rutempresa, correocontacto, descripcion, rangosalarial, fechacreacion) 
        VALUES(?, ?, ?, ?, ?, ?, ?, ?, NOW())";

        $stmt = mysqli_prepare($this->db->conec(), $validateQuery);

        $tipoTrabajo = $admin->getTipoTrabajo();
        $categoriaTrabajo = $admin->getCatTrabajo();
        $cargo = $admin->getCargo();
        $nombreEmpresa = $admin->getNombreEmpresa();
        $rutEmpresa = $admin->getRutEmpresa();
        $email = $admin->getEmail();
        $descripcionCargo = $admin->getDescripcionCargo();
        $rangoSalarial = $admin->getDasSalarial();

        mysqli_stmt_bind_param($stmt, "ssssssss", $tipoTrabajo, $categoriaTrabajo, $cargo, $nombreEmpresa, $rutEmpresa, $email, $descripcionCargo, $rangoSalarial);
        $result = mysqli_stmt_execute($stmt);

        return true;
    }

}