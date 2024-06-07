<?php

class archivocv {
    private $id;
    private $rutusuario;
    private $documento;
    private $fechaCreacion;
    private $fechaEliminacion;

    // Constructor
    public function __construct($id = null, $rutusuario = null, $documento = null, $fechaCreacion = null, $fechaEliminacion = null) {
        $this->id = $id;
        $this->rutusuario = $rutusuario;
        $this->documento = $documento;
        $this->fechaCreacion = $fechaCreacion;
        $this->fechaEliminacion = $fechaEliminacion;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getRutusuario() {
        return $this->rutusuario;
    }

    public function getDocumento() {
        return $this->documento;
    }

    public function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    public function getFechaEliminacion() {
        return $this->fechaEliminacion;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setRutusuario($rutusuario) {
        $this->rutusuario = $rutusuario;
    }

    public function setDocumento($documento) {
        $this->documento = $documento;
    }

    public function setFechaCreacion($fechaCreacion) {
        $this->fechaCreacion = $fechaCreacion;
    }

    public function setFechaEliminacion($fechaEliminacion) {
        $this->fechaEliminacion = $fechaEliminacion;
    }
}
?>
