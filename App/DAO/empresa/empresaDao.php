<?php
require_once __DIR__ . '/../../Models/empresa_model.php';

interface EmpresaDao{

    public function checkData(Empresa_model $admin);
    public function ForUpdateOferta(Empresa_model $admin);
}