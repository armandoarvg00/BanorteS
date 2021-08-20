<?php
include_once("catalogos.class.php");
class Autos{
    private $Anio;
    private $Marca;
    private $Modelo;  

    public function nuevo_auto(){
        $catalogo = new catalogos();
        $insert = "INSERT INTO auto(anio, marca, modelo)
                    VALUES ('$this->Anio', '$this->Marca', '$this->Modelo' )";
        $this->IdAutos = $catalogo->insertarRegistro($insert);
        if ($this->IdAutos != null && $this->IdAutos != 0) {
            return true;
        }
        return false;            
    }
    function setAnio($Anio){
        $this->Anio= $Anio;
    }
    function setMarca($Marca){
        $this->Marca= $Marca;
    }
    function setModelo($Modelo){
        $this->Modelo= $Modelo;
    }
    function setIdAutos($IdAutos){
        $this->IdAutos= $IdAutos;
    }
    function getIdAutos(){
        return $this->IdAutos;
    }
    function getModelo(){
        return $this->Modelo;
    }
    function getMarca(){
        return $this->Marca;
    }
    function getAnio(){
        return $this->Anio;
    }
}
?>