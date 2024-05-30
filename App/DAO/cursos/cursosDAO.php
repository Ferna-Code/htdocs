<?php
require_once __DIR__ . '/../../Models/cursos_model.php';

interface cursosDAO{

    function getdata();
    function getdatabycategory($idCategoria);
}