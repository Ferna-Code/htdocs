<?php
require_once __DIR__ . '/../../Models/adminPublicaciones_model.php';

interface AdministradorDao{
    
    public function getPublicaciones();
}
?>