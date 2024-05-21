<?php

session_start();
require_once __DIR__ . '/../DAO/empresa/Impl/empresaDaoImpl.php';
require_once __DIR__ . '/../Models/empresa_model.php';

class EmpresaController{
    function index(){
      
        include VIEWS_PATH . 'empresas/index.php';
        include VIEWS_PATH . 'Layout/footer.php';

    }

    public function insertData(){
       echo"<script>alert('controlador')</script>";
        $json = file_get_contents('php://input');//escucha el input dentro del PHP
        $data = json_decode($json, true);
       echo 'controlador';
        if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
            echo json_encode(['success' => false, 'message' => 'Error: Datos no recibidos' . json_last_error_msg() . '']);
            return;
        }
        $tipoTrabajo = $data['tipoTrabajo'];
        $categoriaTrabajo = $data['categoriaTrabajo'];
        $cargo = $data['cargo'];
        $nombreEmpresa = $data['nombreEmpresa'];
        $rutEmpresa = $data['rutEmpresa'];
        $email = $data['email'];
        $descripcionCargo = $data['descripcionCargo'];
        $rangoSalarial = $data['rangoSalarial'];

        $admin = new EmpresaDaoImpl();
        $empresaModel = new Empresa_model();

        $empresaModel->setTipoTrabajo($tipoTrabajo);
        $empresaModel->setCatTrabajo($categoriaTrabajo);
        $empresaModel->setCargo($cargo);
        $empresaModel->setNombreEmpresa($nombreEmpresa);
        $empresaModel->setRutEmpresa($rutEmpresa);
        $empresaModel->setEmail($email);
        $empresaModel->setDescripcionCargo($descripcionCargo);
        $empresaModel->setDasSalarial($rangoSalarial);

        $result = $admin->insertData($empresaModel);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Actualización exitosa']);
            
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización']);
        }

    }

}