<?php

class Empresa_model{
    private $tipoTrabajo;
    private $catTrabajo;
    private $cargo;
    private $nombreEmpresa;
    private $rutEmpresa;
    private $email;
    private $descripcionCargo;
    private $rangoSalarial;

    //GET

    public function getTipoTrabajo(){
        return $this->tipoTrabajo;
    }

    public function getCatTrabajo(){
        return $this->catTrabajo;
    }

    public function getCargo(){
        return $this->cargo;
    }

    public function getNombreEmpresa(){
        return $this->nombreEmpresa;
    }

    public function getRutEmpresa(){
        return $this->rutEmpresa;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getDescripcionCargo(){
        return $this->descripcionCargo;
    }

    public function getDasSalarial(){
        return $this->rangoSalarial;
    }

    //SETTERS

    public function setTipoTrabajo($tipoTrabajo){
        $this->tipoTrabajo = $tipoTrabajo;
    }

    public function setCatTrabajo($catTrabajo){
        $this->catTrabajo = $catTrabajo;
    }

    public function setCargo($cargo){
        $this->cargo = $cargo;
    }

    public function setNombreEmpresa($nombreEmpresa){
        $this->nombreEmpresa = $nombreEmpresa;
    }

    public function setRutEmpresa($rutEmpresa){
        $this->rutEmpresa = $rutEmpresa;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setDescripcionCargo($descripcionCargo){
        $this->descripcionCargo = $descripcionCargo;
    }

    public function setDasSalarial($dasSalarial){
        $this->rangoSalarial =$dasSalarial;
    }
}