<?php
class expercienciaacademica_model {

    private $ID;
    private $rutusuario;
    private $fechafinalizacion;
    private $titulobtenido;
    private $cursaactualmente;
    private $fechaCreacion;
    private $activo;
    private $fechaEliminacion;

    // Getters
    public function getID() {
        return $this->ID;
    }

    public function getRutusuario() {
        return $this->rutusuario;
    }

    public function getFechafinalizacion() {
        return $this->fechafinalizacion;
    }

    public function getTitulobtenido() {
        return $this->titulobtenido;
    }

    public function getCursaactualmente() {
        return $this->cursaactualmente;
    }

    public function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function getFechaEliminacion() {
        return $this->fechaEliminacion;
    }

    // Setters
    public function setID($ID) {
        $this->ID = $ID;
    }

    public function setRutusuario($rutusuario) {
        $this->rutusuario = $rutusuario;
    }

    public function setFechafinalizacion($fechafinalizacion) {
        $this->fechafinalizacion = $fechafinalizacion;
    }

    public function setTitulobtenido($titulobtenido) {
        $this->titulobtenido = $titulobtenido;
    }

    public function setCursaactualmente($cursaactualmente) {
        $this->cursaactualmente = $cursaactualmente;
    }

    public function setFechaCreacion($fechaCreacion) {
        $this->fechaCreacion = $fechaCreacion;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }

    public function setFechaEliminacion($fechaEliminacion) {
        $this->fechaEliminacion = $fechaEliminacion;
    }
}
?>
