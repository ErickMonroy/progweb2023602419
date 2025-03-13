<?php
Class Persona{
    private $nombre;
    private $fecNac;
    private $tel;
    
    public function __construct ($nombre, $fecNac, $tel){
        $this->nombre = $nombre;
        $this->fecNac = $fecNac;
        $this->tel = $tel;
        
//Get Set Nombre
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($value){
        $this->nombre = $value;
    }
//Get Set fecNac
    public function getFecNac(){
        return $this->fecNac;
    }
    public function setFecNac($value){
        $this->fecNac = $value;
    }
//Get Set telefono
    public function getTel(){
        return $this->tel;
    }
    public function setTel($value){
        $this->tel = $value;
    }

}
//El cierre de php no se incluye porque el script deber ser incluido en otro