<?php

class AdminPerfilModel
{
    private $IdPerfil;
    private $NombrePerfil;
    private $fechaCreacion;
    private $Activo;
    private $fechaEliminacion;

        //DICCIONARIO  

        public function getIdPerfil()
        {   return $this->IdPerfil; }

        public function getNombrePerfil()
        {   return $this->NombrePerfil; }

        public function getFCreacionCategoria()
        {   return $this->fechaCreacion; }

        public function getActivoCategoria()
        {   return $this->Activo; }

        public function getFEimnacionCategoria()
        {   return $this->fechaEliminacion; }
        


        
        public function setIdPerfil($IdPerfil)
        { return $this->IdPerfil = $IdPerfil; }

        public function setNombrePerfil($NombrePerfil)
        { return $this->NombrePerfil = $NombrePerfil; }

        public function setFCreacionCategoria($fechaCreacion)
        { return $this->fechaCreacion = $fechaCreacion; }

        public function setActivoCategoria($Activo)
        { return $this->Activo = $Activo; }

        public function setFEimnacionCategoria($fechaEliminacion)
        { return $this->fechaEliminacion = $fechaEliminacion; }

}
?>