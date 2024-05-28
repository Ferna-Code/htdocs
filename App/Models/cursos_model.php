<?php

class cursos_model{
    private $id;
    private $nombre;
    private $descripcion;
    private $emitidoPor;
    private $linkPostular;
    private $idCategoria;
    private $fechaCreacion;
    private $activo;
    private $fechaEliminacion;

    // Constructor
    public function __construct() {}

    // Getters and Setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getEmitidoPor() {
        return $this->emitidoPor;
    }

    public function setEmitidoPor($emitidoPor) {
        $this->emitidoPor = $emitidoPor;
    }

    public function getLinkPostular() {
        return $this->linkPostular;
    }

    public function setLinkPostular($linkPostular) {
        $this->linkPostular = $linkPostular;
    }

    public function getIdCategoria() {
        return $this->idCategoria;
    }

    public function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    public function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    public function setFechaCreacion($fechaCreacion) {
        $this->fechaCreacion = $fechaCreacion;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }

    public function getFechaEliminacion() {
        return $this->fechaEliminacion;
    }

    public function setFechaEliminacion($fechaEliminacion) {
        $this->fechaEliminacion = $fechaEliminacion;
    }

}