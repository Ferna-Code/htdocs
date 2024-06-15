<?php
require_once __DIR__ . '/../../Models/experienciaacademica_model.php';

interface experienciaacademicaDao{

    function getdata($rutusuario); 
    function obtenerExperienciaAcademicaPorID($id);
}