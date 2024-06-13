<?php
class Postulacion {
    private $id;
    private $rutusuario;
    private $idcarrera;
    private $rutempresa;
    private $idoferta;
    private $fechaCreacion;
    private $fechaEliminacion;

    // Constructor
    public function __construct($id = null, $rutusuario = null, $idcarrera = null, $rutempresa = null, $idoferta = null, $fechaCreacion = null, $fechaEliminacion = null) {
        $this->id = $id;
        $this->rutusuario = $rutusuario;
        $this->idcarrera = $idcarrera;
        $this->rutempresa = $rutempresa;
        $this->idoferta = $idoferta;
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

    public function getIdcarrera() {
        return $this->idcarrera;
    }

    public function getRutempresa() {
        return $this->rutempresa;
    }

    public function getIdoferta() {
        return $this->idoferta;
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

    public function setIdcarrera($idcarrera) {
        $this->idcarrera = $idcarrera;
    }

    public function setRutempresa($rutempresa) {
        $this->rutempresa = $rutempresa;
    }

    public function setIdoferta($idoferta) {
        $this->idoferta = $idoferta;
    }

    public function setFechaCreacion($fechaCreacion) {
        $this->fechaCreacion = $fechaCreacion;
    }

    public function setFechaEliminacion($fechaEliminacion) {
        $this->fechaEliminacion = $fechaEliminacion;
    }
}
?>
