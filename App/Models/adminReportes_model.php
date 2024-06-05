<?php

class AdminReporteModel
{
    private $IdReporte;
    private $IdComentario;
    private $rutUsuarioo;
    private $IdPublicacion;
    private $fechaCreacion;
    private $Activo;
    private $fechaEliminacion;

        //DICCIONARIO  

        public function getIdReporte()
        {   return $this->IdReporte; }

        public function getIdComentarioReporte()
        {   return $this->IdComentario; }

        public function getRutReporte()
        {   return $this->rutUsuarioo; }

        public function getIdPublicacionReporte()
        {   return $this->IdPublicacion; }

        public function getFCreacionReporte()
        {   return $this->fechaCreacion; }

        public function getActivoReporte()
        {   return $this->Activo; }

        public function getFEliminacionReporte()
        {   return $this->fechaEliminacion; }
        


        
        public function setIdReporte($IdReporte)
        { return $this->IdReporte = $IdReporte; }

        public function setIdComentarioReporte($IdComentario)
        { return $this->IdComentario = $IdComentario; }

        public function setRutReporte($rutUsuarioo)
        { return $this->rutUsuarioo = $rutUsuarioo; }

        public function setIdPublicacionReporte($IdPublicacion)
        { return $this->IdPublicacion = $IdPublicacion; }

        public function setFCreacionReporte($fechaCreacion)
        { return $this->fechaCreacion = $fechaCreacion; }

        public function setActivoReporte($Activo)
        { return $this->Activo = $Activo; }

        public function setFEliminacionReporte($fechaEliminacion)
        { return $this->fechaEliminacion = $fechaEliminacion; }

}
?>