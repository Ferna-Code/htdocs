<?php

class AdminCarrerasModel
{
    private $IdCarrera;
    private $NombreCarrera;
    private $IdCategoria;
    private $fechaCreacion;
    private $Activo;
    private $fechaEliminacion;

        //CARRERAS  
        public function getIdCarrera()
        {   return $this->IdCarrera; }

        public function getNombreCarrera()
        {   return $this->NombreCarrera; }

        public function getIdCtegoria()
        {   return $this->IdCategoria; }

        public function getFCreacionCarrera()
        {   return $this->fechaCreacion; }

        public function getActivoCarrera()
        {   return $this->Activo; }

        public function getFEimnacionCarrera()
        {   return $this->fechaEliminacion; }
        


        public function setIdCarrera($IdCarrera)
        { return $this->IdCarrera = $IdCarrera; }

        public function setNombreCarrera($NombreCarrera)
        { return $this->NombreCarrera = $NombreCarrera; }

        public function setIdCtegoria($IdCategoria)
        { return $this->IdCategoria = $IdCategoria; }

        public function setFCreacionCarrera($fechaCreacion)
        { return $this->fechaCreacion = $fechaCreacion; }

        public function setActivoCarrera($Activo)
        { return $this->Activo = $Activo; }

        public function setFEimnacionCarrera($fechaEliminacion)
        { return $this->fechaEliminacion = $fechaEliminacion; }

}
?>