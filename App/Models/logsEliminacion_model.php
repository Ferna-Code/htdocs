<?php

class LogsEliminacion {
    private $id;
    private $registro;
    private $rut;
    private $fechaEliminacion;

    // Constructor
    public function __construct($id = null, $registro = null, $rut = null, $fechaEliminacion = null) {
        $this->id = $id;
        $this->registro = $registro;
        $this->rut = $rut;
        $this->fechaEliminacion = $fechaEliminacion;
    }

    // Getters and Setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getRegistro() {
        return $this->registro;
    }

    public function setRegistro($registro) {
        $this->registro = $registro;
    }

    public function getRut() {
        return $this->rut;
    }

    public function setRut($rut) {
        $this->rut = $rut;
    }

    public function getFechaEliminacion() {
        return $this->fechaEliminacion;
    }

    public function setFechaEliminacion($fechaEliminacion) {
        $this->fechaEliminacion = $fechaEliminacion;
    }
}

?>
