<?php

class AdminDiccionarioModel
{
    private $IdPalabra;
    private $NombrePalabra;
    private $fechaCreacion;
    private $Activo;
    private $fechaEliminacion;

        //DICCIONARIO  

        public function getIdPalabra()
        {   return $this->IdPalabra; }

        public function getNombrePalabra()
        {   return $this->NombrePalabra; }

        public function getFCreacionCategoria()
        {   return $this->fechaCreacion; }

        public function getActivoCategoria()
        {   return $this->Activo; }

        public function getFEimnacionCategoria()
        {   return $this->fechaEliminacion; }
        


        
        public function setIdPalabra($IdPalabra)
        { return $this->IdPalabra = $IdPalabra; }

        public function setNombrePalabra($NombrePalabra)
        { return $this->NombrePalabra = $NombrePalabra; }

        public function setFCreacionCategoria($fechaCreacion)
        { return $this->fechaCreacion = $fechaCreacion; }

        public function setActivoCategoria($Activo)
        { return $this->Activo = $Activo; }

        public function setFEimnacionCategoria($fechaEliminacion)
        { return $this->fechaEliminacion = $fechaEliminacion; }

}
?>