<?php

class usuario_model{

    private $rut;
    private $nombre;
    private $fechaNacimiento;
    private $idperfil;
    private $correo;
    private $idcarrera;
    private $avance;
    private $cargo;
    private $clave;
    private $fechaCreacion;
    private $activo;
    private $fechaEliminacion;
    private $imagen;
    private $telefono;
    private $direccion;

    // Getters

    public function getrut(){
        return $this->rut;
    }
    public function getnombre(){
        return $this->nombre;
    }
    public function getfechaNacimiento(){
        return $this->fechaNacimiento;
    }
    public function getidperfil(){
        return $this->idperfil;
    }
    public function getcorreo(){
        return $this->correo;
    }
    public function getidcarrera(){
        return $this->idcarrera;
    }
    public function getavance(){
        return $this->avance;
    }
    public function getcargo(){
        return $this->cargo;
    }
    public function getclave(){
        return $this->clave;
    }
    public function getfechaCreacion(){
        return $this->fechaCreacion;
    }
    public function getactivo(){
        return $this->activo;
    }
    public function getfechaEliminacion(){
        return $this->fechaEliminacion;
    }
    public function getimagen(){
        return $this->imagen;
    }
    public function gettelefono(){
        return $this->telefono;
    }
    public function getdireccion(){
        return $this->direccion;
    }

    // Setters

    public function setrut($rut){
        $this->rut = $rut;
    }
    public function setnombre($nombre){
        $this->nombre = $nombre;
    }
    public function setfechaNacimiento($fechaNacimiento){
        $this->fechaNacimiento = $fechaNacimiento;
    }
    public function setidperfil($idperfil){
        $this->idperfil = $idperfil;
    }
    public function setcorreo($correo){
        $this->correo = $correo;
    }
    public function setidcarrera($idcarrera){
        $this->idcarrera = $idcarrera;
    }
    public function setavance($avance){
        $this->avance = $avance;
    }
    public function setcargo($cargo){
        $this->cargo = $cargo;
    }
    public function setclave($clave){
        $this->clave = $clave;
    }
    public function setfechaCreacion($fechaCreacion){
        $this->fechaCreacion = $fechaCreacion;
    }
    public function setactivo($activo){
        $this->activo = $activo;
    }
    public function setfechaEliminacion($fechaEliminacion){
        $this->fechaEliminacion = $fechaEliminacion;
    }
    public function setimagen($imagen){
        $this->imagen = $imagen;
    }
    public function settelefono($telefono){
        $this->telefono = $telefono;
    }
    public function setdireccion($direccion){
        $this->direccion = $direccion;
    }
}
