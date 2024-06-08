<?php
require_once __DIR__ . '/../../Models/supervisorModel.php';
interface SupervidorDao{
    public function insertData(SupervisorModel $admin);
    public function insertCurso(SupervisorModel $admin);
    public function insertPerfil(SupervisorModel $admin);
    public function insertPalabra(SupervisorModel $admin);
    public function insertUsuario(SupervisorModel $admin);
    public function updateCurso(SupervisorModel $admin);
    public function updateUsuario(SupervisorModel $admin);
    public function getCursoById($id);
    public function getUsuarioByRut($rut);
    public function getPalabra();
    public function getCategoria();
    public function getCurso();
    public function getPublicacion();
    public function getReporte();
    public function getOferta();
    public function getPerfil();
    public function getUsuario();
    public function getCarrera();
    
}