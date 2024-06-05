<?php

class AdminOfertasModel
{
    private $IdOferta;
    private $tipoOferta;
    private $IdCategoria;
    private $cargo;
    private $nombreEmpresa;
    private $rutEmpresa;
    private $correoContacto;
    private $descripcion;
    private $rangoSalarial;
    private $fechaCreacion;
    private $Activo;
    private $fechaEliminacion;

   

        public function getIdOferta()
        {   return $this->IdOferta; }

        public function getTipoOferta()
        {   return $this->tipoOferta; }

        public function getIdCategoria()
        {   return $this->IdCategoria; }
        
        public function getCargoOferta()
        {   return $this->cargo; }

        public function getNombreEmpresa()
        {   return $this->nombreEmpresa; }

        public function getRutEmpresa()
        {   return $this->rutEmpresa; }

        public function getCorreoContacto()
        {   return $this->correoContacto; }
        
        public function getDescripcion()
        {   return $this->descripcion; }

        public function getRangoSalarial()
        {   return $this->rangoSalarial; }

        public function getFCreacionOferta()
        {   return $this->fechaCreacion; }

        public function getActivoOferta()
        {   return $this->Activo; }

        public function getFEliminacionOferta()
        {   return $this->fechaEliminacion; }
        



        public function setIdOferta($IdOferta)
        {   return $this->IdOferta = $IdOferta; }

        public function setTipoOferta($tipoOferta)
        {   return $this->tipoOferta = $tipoOferta; }

        public function setIdCategoria($tipoOferta)
        {   return $this->tipoOferta = $tipoOferta; }
        
        public function setCargoOferta($cargo)
        {   return $this->cargo = $cargo; }

        public function setNombreEmpresa($nombreEmpresa)
        {   return $this->nombreEmpresa = $nombreEmpresa; }

        public function setRutEmpresa($rutEmpresa)
        {   return $this->rutEmpresa = $rutEmpresa; }

        public function setCorreoContacto($correoContacto)
        {   return $this->correoContacto = $correoContacto; }
        
        public function setDescripcion($descripcion)
        {   return $this->descripcion = $descripcion; }

        public function setRangoSalarial($rangoSalarial)
        {   return $this->rangoSalarial = $rangoSalarial; }

        public function setFCreacionOferta($fechaCreacion)
        {   return $this->fechaCreacion = $fechaCreacion; }

        public function setActivoOferta($Activo)
        {   return $this->Activo = $Activo; }

        public function setFEliminacionOferta($fechaEliminacion)
        {   return $this->fechaEliminacion = $fechaEliminacion; }

}
?>