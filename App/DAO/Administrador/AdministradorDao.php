<?php

require_once __DIR__ . '/../../Models/adminPublicaciones_model.php';
require_once __DIR__ . '/../../Models/adminCarreras_model.php';
require_once __DIR__ . '/../../Models/adminCategoria_model.php';
require_once __DIR__ . '/../../Models/adminCursos_model.php';
require_once __DIR__ . '/../../Models/adminDiccionario_model.php';
require_once __DIR__ . '/../../Models/adminPerfiles_model.php';
require_once __DIR__ . '/../../Models/adminReportes_model.php';
require_once __DIR__ . '/../../Models/adminUsuarios_model.php';
require_once __DIR__ . '/../../Models/adminArchivos_model.php';
require_once __DIR__ . '/../../Models/adminComentarios_model.php';
require_once __DIR__ . '/../../Models/adminOfertas_model.php';

/*require_once __DIR__ . '/../../Models/adminPostulaciones_model.php';
require_once __DIR__ . '/../../Models/adminCVAbreviado_model.php';
require_once __DIR__ . '/../../Models/adminExpAcademica_model.php';
require_once __DIR__ . '/../../Models/adminExpLaboral_model.php';*/

interface AdministradorDao{
    
    public function getCarreras();
    public function getCategorias();
    public function getPublicaciones();
    public function getCursos();
    public function getDiccionario();
    public function getPerfiles();
    public function getReportes();
    public function getUsuarios();
    public function getArchivos();
    public function getComentarios();
    public function getOfertas();
    public function getPostulaciones();
    public function getExpAcademica();
    public function getExpLaboral();

}
?>