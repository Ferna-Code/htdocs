<?php

class AdminCursosModel
{
    private $IdCurso;
    private $nombreCurso;
    private $Descripcion;
    private $emitidopor;
    private $linkpostular;
    private $IdCategoria;
    private $fechaCreacion;
    private $Activo;
    private $fechaEliminacion;


    //Cursos
    public function getIdCurso()
    {   return $this->IdCurso; }

    public function getNombreCurso()
    {   return $this->nombreCurso; } 

    public function getDescripcion()
    {  return $this->Descripcion; }

    public function getEmitidopor()
    {   return $this->emitidopor;   }

    public function getLinkPostular()
    {   return $this->linkpostular;   }

    public function getIdCategoria()
    {   return $this->IdCategoria;   }

    public function getFCreacion()
    {   return $this->fechaCreacion; }

    public function getActivo()
    {  return $this->Activo;  }

    public function getFEliminacion()
    {  return $this->fechaEliminacion; }




    public function setIdCurso($IdCurso)
    { return $this->IdCurso = $IdCurso; }

    public function setNombreCurso($nombreCurso)
    {  return $this->nombreCurso = $nombreCurso;  }

    public function setDescripcion($Descripcion)
    {  return $this->Descripcion = $Descripcion; }

    public function setEmitidopor($emitidopor)
    {  return $this->emitidopor = $emitidopor; }

    public function setLinkPostular($linkpostular)
    {  return $this->linkpostular = $linkpostular; }

    public function setIdCategoria($IdCategoria)
    {  return $this->IdCategoria = $IdCategoria; }

    public function setFCreacion($fechaCreacion)
    {  return $this->fechaCreacion = $fechaCreacion; }

    public function setActivo($Activo)
    {  return $this->Activo = $Activo;  }

    public function setFEliminacion($fechaEliminacion)
    {  return $this->fechaEliminacion = $fechaEliminacion; }
}
