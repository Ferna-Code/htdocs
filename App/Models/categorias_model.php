<?php

class categoriasModel {
    private $nombre;
    private $fechaCreacion;
    private $fechaEliminacion;
    private $activo;

    // Getter and Setter for $nombre
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Getter and Setter for $fechaCreacion
    public function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    public function setFechaCreacion($fechaCreacion) {
        $this->fechaCreacion = $fechaCreacion;
    }

    // Getter and Setter for $fechaEliminacion
    public function getFechaEliminacion() {
        return $this->fechaEliminacion;
    }

    public function setFechaEliminacion($fechaEliminacion) {
        $this->fechaEliminacion = $fechaEliminacion;
    }

    // Getter and Setter for $activo
    public function getActivo() {
        return $this->activo;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }
}
