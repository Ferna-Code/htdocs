<?php
require_once __DIR__ . '/../empresaDao.php';
require_once __DIR__ . '/../../../Models/empresa_model.php';
require_once __DIR__ . '/../../../Models/conexion.php';


class EmpresaDaoImpl implements EmpresaDao
{
    private $db;

    public function __construct()
    {
        $this->db = new conexion();
    }



    public function insertData($tipoTrabajo, $categoria, $cargo, $nombreEmpresa, $rutEmpresa, $email, $descripcionCargo, $rangoSalarial, $activate)
    {

        $validateQuery = "INSERT INTO ofertas(tipoOferta, idcategoria, cargo, nombreEmpresa, rutempresa, correocontacto, descripcion, rangosalarial, fechacreacion, activate) 
        VALUES(?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?)";
        $stmt = mysqli_prepare($this->db->conec(), $validateQuery);
        mysqli_stmt_bind_param($stmt, "ssssssssi", $tipoTrabajo, $categoria, $cargo, $nombreEmpresa, $rutEmpresa, $email, $descripcionCargo, $rangoSalarial, $activate);
        $result = mysqli_stmt_execute($stmt);

        return $result;
    }

    public function checkData(Empresa_model $admin)
    {

        $tipoTrabajo = $admin->getTipoTrabajo();
        $categoria = $admin->getCatTrabajo();
        $cargo = $admin->getCargo();
        $nombreEmpresa = $admin->getNombreEmpresa();
        $rutEmpresa = $admin->getRutEmpresa();
        $email = $admin->getEmail();
        $descripcionCargo = $admin->getDescripcionCargo();
        $rangoSalarial = $admin->getDasSalarial();

        $validateQuery = "SELECT * FROM diccionario";
        $stmt = mysqli_prepare($this->db->conec(), $validateQuery);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $activate = 1;

        $palabras = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $palabras[] = $row['palabra'];
        }

        $palabrasEnDescripcion = preg_split('/\s+/', $descripcionCargo);



        $variables = array_merge([$tipoTrabajo, $categoria, $cargo, $nombreEmpresa, $rutEmpresa, $email, $descripcionCargo, $rangoSalarial], $palabrasEnDescripcion);
        $activate = 1;
        foreach ($variables as $variable) {
            if (in_array($variable, $palabras)) {
                $activate = 0;
                break;
            }
        }
        $insertResult = $this->insertData($tipoTrabajo, $categoria, $cargo, $nombreEmpresa, $rutEmpresa, $email, $descripcionCargo, $rangoSalarial, $activate);
        return $insertResult;
    }
}
