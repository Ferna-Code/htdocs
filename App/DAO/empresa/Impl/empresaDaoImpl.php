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



    public function insertData($tipoTrabajo, $categoria, $cargo, $nombreEmpresa, $rutEmpresa, $email, $descripcionCargo, $rangoSalarial, $activate, $verificar)
    {
        // Verificar si se debe proceder con la inserción
        if ($verificar == 1) {

            $validateQuery = "INSERT INTO ofertas (tipoOferta, idcategoria, cargo, nombreEmpresa, rutempresa, correocontacto, descripcion, rangosalarial, fechacreacion, fechaeliminacion, activate) 
                          VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), DATE_ADD(NOW(), INTERVAL 3 MONTH), ?)";


            $stmt = mysqli_prepare($this->db->conec(), $validateQuery);
            if ($stmt === false) {

                die('Error al preparar la consulta: ' . mysqli_error($this->db->conec()));
            }


            mysqli_stmt_bind_param($stmt, "sssssssss", $tipoTrabajo, $categoria, $cargo, $nombreEmpresa, $rutEmpresa, $email, $descripcionCargo, $rangoSalarial, $activate);


            $result = mysqli_stmt_execute($stmt);

            if ($result === false) {

                die('Error al ejecutar la consulta: ' . mysqli_stmt_error($stmt));
            }


            mysqli_stmt_close($stmt);


            return $result;
        } else {
            echo "<script>alert('No se puede publicar la oferta: contiene palabras no permitidas.');</script>";
            return false;
        }
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

        $palabras = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $palabras[] = $row['palabra'];
        }

        //separa el contenido del mensaje guardandolo en un array
        $palabrasEnDescripcion = preg_split('/\s+/', $descripcionCargo);

        $variables = array_merge(
            [$tipoTrabajo, $categoria, $cargo, $nombreEmpresa, $rutEmpresa, $email, $descripcionCargo, $rangoSalarial],
            $palabrasEnDescripcion
        );

        $activate = 1;
        $verificar = 1;
        //Compara si existe alguna palabra prohibida en el contenido, si es que llega a existir verificar cambia a 0 y impide la inserción
        foreach ($variables as $variable) {
            if (in_array($variable, $palabras)) {
                $verificar = 0;
                break;
            }
        }

        $insertResult = $this->insertData($tipoTrabajo, $categoria, $cargo, $nombreEmpresa, $rutEmpresa, $email, $descripcionCargo, $rangoSalarial, $activate, $verificar);
        return $insertResult;
    }
}
