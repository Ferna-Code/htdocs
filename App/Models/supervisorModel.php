<?php
class SupervisorModel
{
    //CATEGORIA
    private $nuevaCategoria;

    //CURSO
    private $categoriaCurso;
    private $nombreCurso;
    private $descripcionCurso;
    private $fechaInicio;
    private $link;
    private $activo;


    //GET

    //CATEGORIA
    public function getNuevaCategoria(){
        return $this->nuevaCategoria;
    }

    //CURSO
    public function getCategoriaCurso(){
        return $this->categoriaCurso;
    }
    public function getNombreCurso(){
        return $this->nombreCurso;
    }
    public function getDescripcionCurso(){
        return $this->descripcionCurso;
    }
    public function getFechaInicio(){
        return $this->fechaInicio;
    }
    public function getLink(){
        return $this->link;
    }
    public function getactivo(){
        return $this->activo;
    }

    //SET

    //CATEGORIA
    public function setNuevaCategoria($nuevaCategoria){
        $this->nuevaCategoria=$nuevaCategoria;
    }

    //CURSO
    public function setCategoriaCurso($categoriaCurso){
        $this->categoriaCurso=$categoriaCurso;
    }
    public function setNombreCurso($nombreCurso){
        $this->nombreCurso=$nombreCurso;
    }
    public function setDescripcionCurso($descripcionCurso){
        $this->descripcionCurso=$descripcionCurso;
    }
    public function setFechaInicio($fechaInicio){
        $this->fechaInicio=$fechaInicio;
    }
    public function setLink($link){
        $this->link=$link;
    }
    public function setactivo($activo){
        $this->activo=$activo;
    }

}
