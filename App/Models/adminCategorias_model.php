<?php

class AdminCategoriasModel
{
    private $IdCategoria;
    private $NombreCategoria;
    private $fechaCreacion;
    private $Activo;
    private $fechaEliminacion;

        //CATEGORIA  

        public function getNombreCategoria()
        {   return $this->NombreCategoria; }

        public function getIdCtegoria()
        {   return $this->IdCategoria; }

        public function getFCreacionCategoria()
        {   return $this->fechaCreacion; }

        public function getActivoCategoria()
        {   return $this->Activo; }

        public function getFEimnacionCategoria()
        {   return $this->fechaEliminacion; }
        


        
        public function setNombreCategoria($NombreCategoria)
        { return $this->NombreCategoria = $NombreCategoria; }

        public function setIdCategoria($IdCategoria)
        { return $this->IdCategoria = $IdCategoria; }

        public function setFCreacionCategoria($fechaCreacion)
        { return $this->fechaCreacion = $fechaCreacion; }

        public function setActivoCategoria($Activo)
        { return $this->Activo = $Activo; }

        public function setFEimnacionCategoria($fechaEliminacion)
        { return $this->fechaEliminacion = $fechaEliminacion; }

}
?>