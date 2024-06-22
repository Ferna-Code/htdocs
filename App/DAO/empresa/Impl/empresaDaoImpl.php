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
            // Query SQL con marcadores de posición (?)
            $validateQuery = "INSERT INTO ofertas (tipoOferta, idcategoria, cargo, nombreEmpresa, rutempresa, correocontacto, descripcion, rangosalarial, fechacreacion, fechaeliminacion, activate) 
                              VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), DATE_ADD(NOW(), INTERVAL 3 MONTH), ?)";
            
            // Preparar la consulta
            $stmt = mysqli_prepare($this->db->conec(), $validateQuery);
            if ($stmt === false) {
                // Manejar el error si la preparación falla
                die('Error al preparar la consulta: ' . mysqli_error($this->db->conec()));
            }
            
            // Vincular los parámetros a la consulta preparada
            mysqli_stmt_bind_param($stmt, "sssssssss", $tipoTrabajo, $categoria, $cargo, $nombreEmpresa, $rutEmpresa, $email, $descripcionCargo, $rangoSalarial, $activate);
            
            // Ejecutar la consulta
            $result = mysqli_stmt_execute($stmt);
            
            if ($result === false) {
                // Manejar el error si la ejecución falla
                die('Error al ejecutar la consulta: ' . mysqli_stmt_error($stmt));
            }
            
            // Cerrar el statement
            mysqli_stmt_close($stmt);
            
            // Devolver el resultado de la ejecución (true si fue exitosa, false si no)
            return ['success' => true, 'message' => 'Oferta creada correctamente.'];
        } else {
            return ['success' => false, 'message' => 'No se puede publicar la oferta: contiene palabras no permitidas.'];
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
    
        $palabrasEnDescripcion = preg_split('/\s+/', $descripcionCargo);
    
        $variables = array_merge(
            [$tipoTrabajo, $categoria, $cargo, $nombreEmpresa, $rutEmpresa, $email, $descripcionCargo, $rangoSalarial],
            $palabrasEnDescripcion
        );
    
        $activate = 1;
        $verificar = 1;
        foreach ($variables as $variable) {
            if (in_array($variable, $palabras)) {
                $verificar = 0;
                break;
            }
        }
    
        $insertResult = $this->insertData($tipoTrabajo, $categoria, $cargo, $nombreEmpresa, $rutEmpresa, $email, $descripcionCargo, $rangoSalarial, $activate, $verificar);
    
        // Devolver el resultado de la inserción como JSON
        header('Content-Type: application/json');
        echo json_encode($insertResult);
    }

    public function ForUpdateOferta(Empresa_model $admin){
        $updateQuery = "UPDATE ofertas SET activate=1 WHERE id=?";
    
        $stmt = mysqli_prepare($this->db->conec(), $updateQuery);
    
        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta: " . mysqli_error($this->db->conec()));
        }
    
       
        $id = $admin->getId();

        mysqli_stmt_bind_param($stmt, "i", $id);
        $result = mysqli_stmt_execute($stmt);
    
        if ($result) {
            return array("success" => true, "message" => "Datos actualizados correctamente");
        } else {
            return array("success" => false, "message" => "Error al actualizar datos: " . mysqli_stmt_error($stmt));
        }
       
    }
    
}
