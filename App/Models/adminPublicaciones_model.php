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
    {
        return $this->IdPublicacion;

    }

    public function getRutPublicacion()
    {
        return $this->rutUsuario;

    } 
    public function getNReportePublicacion()
    {
        return $this->nReporte;

    }
    public function getFCreacionPublicacion()
    {
        return $this->fechaCreacion;

    }
    public function getActivoPublicacion()
    {
        return $this->Activo;

    }
    public function getFEliminacionPublicacion()
    {
        return $this->fechaEliminacion;

    }
    public function getPublicacion()
    {
        return $this->publicacion;

    }


    public function setIDPublicacion($IdPublicacion)
    {
        return $this->IdPublicacion = $IdPublicacion;
    }

    public function setRutUsuario($rutUsuario)
    {
        return $this->rutUsuario = $rutUsuario;
    }

    public function setpublicacion($publicacion)
    {
        return $this->publicacion = $publicacion;
    }
    public function setNReporte($nReporte)
    {
        return $this->nReporte = $nReporte;
    }

    public function setfechaCreacion($fechaCreacion)
    {
        return $this->fechaCreacion = $fechaCreacion;
    }

    public function setActivo($Activo)
    {
        return $this->Activo = $Activo;
    }

    public function setfechaEliminacion($fechaEliminacion)
    {
        return $this->fechaEliminacion = $fechaEliminacion;
    }
}
