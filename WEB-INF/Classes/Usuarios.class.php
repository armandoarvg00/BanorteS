<?php
include_once("catalogos.class.php");
class Usuarios{
    private $IdUsuarios;
    private $tabla = "usuarios";
    private $nombreId = "id_usuarios";
    public function getUseraseguradoras($aseguradora) {
        $consulta = "SELECT usu.id_usuarios FROM usuarios as usu 
        join tipo as tipo on usu.id_tipo = tipo.id_tipo 
        WHERE tipo.estado = 'activo' AND (tipo.tipo='venta nueva' or activo_venta ='activo') 
        and tipo.actual".$aseguradora." ='0' and tipo.".$aseguradora."='1' ORDER BY usu.id_usuarios LIMIT 3 ";
        $catalogo = new catalogos();
        $query = $catalogo->obtenerLista($consulta);
        if(mysqli_num_rows($query)!=0){
            while ($rs = mysqli_fetch_array($query)) {
                $this->IdUsuarios = $rs['id_usuarios'];
            }
        }else{
            $this->regresa($aseguradora);
        }   
    }
    public function regresa($aseguradora){
        $where=" 0=0 ";
        $sql_update = "UPDATE tipo SET  actual".$aseguradora." = '0' ";
        $catalogo = new catalogos();
        $query = $catalogo->ejecutaConsultaActualizacion($sql_update, $this->tabla, $where);
        if ($query == 1) {
            return true;
        }
        return false;
        getUseraseguradoras($aseguradora);
    }
    public function nuevo_cotizacion(){
        $catalogo = new catalogos();
        $insert = "INSERT INTO auto(id_cliente, id_auto, ip, aseguradora, con , realizdo, id_usuarios)
                    VALUES ('$this->IdCliente', '$this->IdAuto', '$this->Aseguradora', '$this->Aseguradora2', '$this->Realizado' , '$this->IdUsuarios' )";
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