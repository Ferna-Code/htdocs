<?php

class experciencialaboral_model {

    private $ID;
    private $rutusuario;
    private $fechadesde;
    private $fechahasta;
    private $puesto;
    private $Descripcion;
    private $trabajaactualmente;
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

    public function getFechadesde() {
        return $this->fechadesde;
    }

    public function getFechahasta() {
        return $this->fechahasta;
    }

    public function getPuesto() {
        return $this->puesto;
    }

    public function getDescripcion() {
        return $this->Descripcion;
    }

    public function getTrabajaactualmente() {
        return $this->trabajaactualmente;
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

    public function setFechadesde($fechadesde) {
        $this->fechadesde = $fechadesde;
    }

    public function setFechahasta($fechahasta) {
        $this->fechahasta = $fechahasta;
    }

    public function setPuesto($puesto) {
        $this->puesto = $puesto;
    }

    public function setDescripcion($Descripcion) {
        $this->Descripcion = $Descripcion;
    }

    public function setTrabajaactualmente($trabajaactualmente) {
        $this->trabajaactualmente = $trabajaactualmente;
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
