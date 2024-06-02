<?php

class AdminComentariosModel
{
    private $IdComentario;
    private $rutUsuario;
    private $IdPublicacion;
    private $comentario;
    private $nReporte;
    private $fechaCreacion;
    private $Activo;
    private $fechaEliminacion;


    //Publicaciones
    public function getIdComentario()
    {   return $this->IdComentario; }

    public function getRutComentario()
    {   return $this->rutUsuario; } 

    public function getIdPublicacion()
    {  return $this->IdPublicacion; }

    public function getComentario()
    {  return $this->comentario; }

    public function getNReporteComentario()
    {   return $this->nReporte;   }

    public function getFCreacionComentario()
    {   return $this->fechaCreacion; }

    public function getActivoComentario()
    {  return $this->Activo;  }

    public function getFEliminacionComentario()
    {  return $this->fechaEliminacion; }



    public function setIdComentario($IdComentario)
    {   return $this->IdComentario = $IdComentario; }

    public function setRutComentario($rutUsuario)
    {   return $this->rutUsuario = $rutUsuario; } 

    public function setIdPublicacion($IdPublicacion)
    {  return $this->IdPublicacion = $IdPublicacion; }

    public function setComentario($comentario)
    {  return $this->comentario = $comentario; }

    public function setNReporteComentario($nReporte)
    {   return $this->nReporte = $nReporte;   }

    public function setFCreacionComentario($fechaCreacion)
    {   return $this->fechaCreacion = $fechaCreacion; }

    public function setActivoComentario($Activo)
    {  return $this->Activo = $Activo;  }

    public function setFEliminacionComentario($fechaEliminacion)
    {  return $this->fechaEliminacion = $fechaEliminacion; }
}
