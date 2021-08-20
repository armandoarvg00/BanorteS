<?php 
include_once("../Classes/catalogos.class.php");
include_once("../Classes/Clientes.class.php");
include_once("../Classes/Usuarios.class.php");
include_once("../Classes/Autos.class.php");
include_once("../Classes/Cotizacion.class.php");
$catalogo = new catalogos();
$clientes = new Clientes();
$autos = new Autos();
$usuarios = new Usuarios();
$cotizacion = new Cotizacion();
if (isset($_POST['form'])) {
    $parametros = "";
    parse_str($_POST['form'], $parametros);
    $nombre=$parametros['nombre'];
    $email=$parametros['email'];
    $telefono=$parametros['telefono'];
    $cp=$parametros['cp'];
    $marca=$parametros['marca'];
    $anio=$parametros['anio'];
    $modelo=$parametros['modelo'];
    $edad=$parametros['edad'];
    $clientes->setNombre($nombre);
    $clientes->setEmail($email);
    $clientes->setEdad($edad);
    $clientes->setTelefono($telefono);
    $clientes->setCp($cp);
    $autos->setAnio($anio);
    $autos->setMarca($modelo);
    $autos->setModelo($marca);
    if($clientes->nuevo_cliente()){
        $cotizacion->setIdCliente($clientes->getIdClientes());
        if($autos->nuevo_auto()){
            $cotizacion->setIdAuto($autos->getIdAutos());
            $cotizacion->setIp($_SERVER['REMOTE_ADDR']);
            $cotizacion->setAseguradora("Banorte");
            if(isset($parametros['url']) && $parametros['url']!=""){
                $url= $parametros['url'];
            }else{
                $url= "";
            }
            $usuarios->getUseraseguradoras('Banorte');
            $id_usuarios=$usuarios->getIdUsuarios();
            $cotizacion->setAseguradora2("Banorte ".$url);
            $cotizacion->setIdUsuarios($id_usuarios);
            if($cotizacion->nuevo_cotizacion()){
                echo 'Gracias Por Cotizar'; 
            }else{
                echo 'Error: intentalo más tarde1'; 
            }
        }else{
            echo 'Error: intentalo más tarde2'; 
        }
    }else{
        echo 'Error: intentalo más tarde3'; 
    }
    
}
?>