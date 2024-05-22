<?php
session_start();
require_once __DIR__ . '/../DAO/supervisor/Impl/supervisorDaoImpl.php';
require_once __DIR__ . '/../Models/supervisorModel.php';

class SupervisorController{
    public function index(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Supervisor/index.php';
        include VIEWS_PATH . 'Layout/footer.php';
    }

    public function insertData(){
       
        $json = file_get_contents('php://input');//escucha el input dentro del PHP
        $data = json_decode($json, true);
        echo "<script>alert('controlador')</script>";
        echo "<script>console.log('controlador')</script>";
        if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
            echo json_encode(['success' => false, 'message' => 'Error: Datos no recibidos' . json_last_error_msg() . '']);
            return;
        }
        $nuevaCategoria = $data['nuevaCategoria'];
        
        $admin = new SupervisorDaoImpl();
        $supervisorModel = new SupervisorModel();
        $supervisorModel->setNuevaCategoria($nuevaCategoria);

        $result = $admin->insertData($supervisorModel);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Actualización exitosa']);
            
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización']);
        }

    }
}