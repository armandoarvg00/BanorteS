<?php
include_once("catalogos.class.php");
class Clientes{
    private $Nombre;
    private $Email;
    private $Edad;  
    private $Telefono;
    private $Cp;
    private $Comentarios;
    public function nuevo_cliente(){
        $catalogo = new catalogos();
         $insert = "INSERT INTO clientes(nombrecliente, emailcliente, edad, telefono, cp)
                    VALUES ('$this->Nombre', '$this->Email', '$this->Edad', '$this->Telefono', '$this->Cp')";
        $this->IdClientes = $catalogo->insertarRegistro($insert);
        if ($this->IdClientes != null && $this->IdClientes != 0) {
            return true;
        }
        return false; 
    }
    function setNombre($Nombre){
        $this->Nombre= $Nombre;
    }
    function setEmail($Email){
        $this->Email= $Email;
    }
    function setEdad($Edad){
        $this->Edad= $Edad;
    }
    function setTelefono($Telefono){
        $this->Telefono= $Telefono;
    }
    function setCp($Cp){
        $this->Cp= $Cp;
    }
    function setComentarios($Comentarios){
        $this->Comentarios= $Comentarios;
    }
    function setIdClientes($IdClientes){
        $this->IdClientes= $IdClientes;
    }
    function getIdClientes(){
        return $this->IdClientes;
    }
    function getComentarios(){
        return $this->Comentarios;
    }
    function getCp(){
        return $this->Cp;
    }
    function getTelefono(){
        return $this->Telefono;
    }
    function getEdad(){
        return $this->Edad;
    }
    function getEmail(){
        return $this->Email;
    }
    function getNombre(){
        return $this->Nombre;
    }
}
?>