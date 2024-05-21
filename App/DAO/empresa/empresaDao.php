<?php
require_once __DIR__ . '/../../Models/empresa_model.php';

interface EmpresaDao{

    public function insertData(Empresa_model $admin);
}