<?php
require_once __DIR__ . '/../../Models/expercienciaacademica_model.php';

interface expercienciaacademicaDao{

    function getdata(expercienciaacademica_model $experiencia); 
}