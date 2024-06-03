<?php


class AdminPublicacionesModel
{
    private $IdPublicacion;
    private $rutUsuario;
    private $publicacion;
    private $nReporte;
    private $fechaCreacion;
    private $Activo;
    private $fechaEliminacion;


    //Publicaciones
    public function getIdPublicacion()
    {   return $this->IdPublicacion; }

    public function getRutPublicacion()
    {   return $this->rutUsuario; } 

    public function getPublicacion()
    {  return $this->publicacion; }

    public function getNReportePublicacion()
    {   return $this->nReporte;   }

    public function getFCreacionPublicacion()
    {   return $this->fechaCreacion; }

    public function getActivoPublicacion()
    {  return $this->Activo;  }

    public function getFEliminacionPublicacion()
    {  return $this->fechaEliminacion; }




    public function setIdPublicacion($IdPublicacion)
    { return $this->IdPublicacion = $IdPublicacion; }

    public function setRutPublicacion($rutUsuario)
    {  return $this->rutUsuario = $rutUsuario;  }

    public function setpublicacion($publicacion)
    {  return $this->publicacion = $publicacion; }

    public function setNReportePublicacion($nReporte)
    {  return $this->nReporte = $nReporte; }

    public function setFCreacionPublicacion($fechaCreacion)
    {  return $this->fechaCreacion = $fechaCreacion; }

    public function setActivoPublicacion($Activo)
    {  return $this->Activo = $Activo;  }

    public function setFEliminacionPublicacion($fechaEliminacion)
    {  return $this->fechaEliminacion = $fechaEliminacion; }
}