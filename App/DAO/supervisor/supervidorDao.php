<?php
require_once __DIR__ . '/../../Models/supervisorModel.php';
interface SupervidorDao{
    public function insertData(SupervisorModel $admin);
}