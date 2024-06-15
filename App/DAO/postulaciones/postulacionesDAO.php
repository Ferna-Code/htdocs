<?php
require_once __DIR__ . '/../../Models/postulaciones_model.php';

interface postulacionesDao{

    function getdata($id); 
    function getAllData();
    function getdatabyUser($rutusuario);
}