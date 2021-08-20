<?php
include_once("catalogos.class.php");
class Cotizacion{
    private $IdCliente;
    private $IdAuto;
    private $Ip; 
    private $Aseguradora; 
    private $Aseguradora2;
    private $Realizado; 
    private $IdUsuarios; 
    private $Mensaje; 
    public function nuevo_cotizacion(){
        $catalogo = new catalogos();
         $insert = "INSERT INTO cotizacion(id_cliente, id_auto, ip, aseguradora, con ,  id_usuarios)
                    VALUES ('$this->IdCliente', '$this->IdAuto',' $this->Ip', '$this->Aseguradora', '$this->Aseguradora2' , '$this->IdUsuarios' );";
        $this->id_cotizacion = $catalogo->insertarRegistro($insert);
        if ($this->id_cotizacion != null && $this->id_cotizacion != 0) {
            return true;
        }
        return false;
    }

    function setid_cotizacion($id_cotizacion){
        $this->id_cotizacion= $id_cotizacion;
    }
    function getid_cotizacion(){
        return $this->id_cotizacion;
    }
    function setIdCliente($IdCliente){
        $this->IdCliente= $IdCliente;
    }
    function setIdAuto($IdAuto){
        $this->IdAuto= $IdAuto;
    }
    function setIp($Ip){
        $this->Ip= $Ip;
    }
    function setAseguradora($Aseguradora){
        $this->Aseguradora= $Aseguradora;
    }
    function setAseguradora2($Aseguradora2){
        $this->Aseguradora2= $Aseguradora2;
    }
    function setRealizado($Realizado){
        $this->Realizado= $Realizado;
    }
    function setIdUsuarios($IdUsuarios){
        $this->IdUsuarios= $IdUsuarios;
    }
    function setMensaje($Mensaje){
        $this->Mensaje= $Mensaje;
    }
    function getIdCliente(){
        return $this->IdCliente;
    }
    function getIdAuto(){
        return $this->IdAuto;
    }
    function getIp(){
        return $this->Ip;
    }
    function getAseguradora(){
        return $this->Aseguradora;
    }
    function getAseguradora2(){
        return $this->Aseguradora2;
    }
    function getRealizado(){
        return $this->Realizado;
    }
    function getIdUsuarios(){
        return $this->IdUsuarios;
    }
    function getMensaje(){
        return $this->Mensaje;
    }
}
?>