<?php 
$url="";
if(isset($_GET['url']) && $_GET['url']!=""){
  $url=$_GET['url'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banorte Seguros</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/icono.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/index.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
 
  </script>
<!-- Smartsupp Live Chat script -->
  <script type="text/javascript">
  var _smartsupp = _smartsupp || {};
  _smartsupp.key = '4dba3e5c624e743f78d75e850dd48d2614a0bf8a';
  window.smartsupp||(function(d) {
    var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
    s=d.getElementsByTagName('script')[0];c=d.createElement('script');
    c.type='text/javascript';c.charset='utf-8';c.async=true;
    c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
  })(document);
  </script>
</head>
<body >
    <div class="principal">
        <div class="cabecera">
            <div class="parte">
                <div class="logo"> <img src="img/logo_banorte.jpg" ></div>
                <div class="imagen"><img src="img/logo_promo.png" ></div>
            </div>
            <div class="parte">
                <div class="texto"> <p> Descuento especial Termina en</p> </div>
                <div class="temporizador" id="temporizador"> 
                    <div id="cuenta"></div>
                </div>
            </div>
            <div class="parte2">
                <div class="logo"> <img src="img/logo_banorte.jpg" ></div>
                <div class="imagen"><img src="img/logo_promo.png" ></div>
                <div class="texto"> <p> Descuento especial Termina en</p> </div>
                <div class="temporizador" id="temporizador"> 
                    <div id="cuenta"></div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="marcado">
                <p>Márcanos al (55) 4774-7420 al 30</p>
            </div>
            <div class="form-data"> 
                <form action="/" id="form" name="form" class="form">
                  <div class="datos2">
                    <label for="nombre"><span></span></label>
                    <input type="text" class="text" name="nombre" id="nombre"  placeholder="Nombre" >
                  </div>
                  <div class="datos2">
                    <label for="email"><span></span></label>
                    <input type="email" class="text" name="email" id="email" placeholder="E-mail">
                  </div>
                  <div class="datos2">
                    <label for="telefono"><span></span></label>
                    <input type="text" class="text" name="telefono" id="telefono" placeholder="Teléfono">
                  </div>
                  <div class="datos2">
                    <label for="cp"><span></span></label>
                    <input type="text" class="text" name="cp" id="cp" placeholder="Código Postal">
                  </div>
                  <div class="datos2">
                    <label for="marca"><span></span></label>
                    <input type="text" class="text" name="marca" id="marca" placeholder="Marca">
                  </div>
                  <div class="datos2">
                    <label for="anio"><span></span></label>
                    <input type="text" class="text" name="anio" id="anio" placeholder="Año">
                  </div>
                  <div class="datos2">
                    <label for="modelo"><span></span></label>
                    <input type="text" class="text" name="modelo" id="modelo" placeholder="Modelo">
                  </div>
                  <div class="datos2">
                    <label for="edad"><span></span></label>
                    <input type="text" class="text" name="edad" id="edad" placeholder="Edad del Conductor">
                  </div >
                    <input type="hidden" id="url" name ="url" value="<?php echo $url;?>">
                    <input type="button" value="COTIZAR GRATIS" name="enviar" id="enviar" class="enviar">
                </form>
            </div>
            <div class="imagen_slider">
            </div>
        </div>
        <div class="section">
            <div class="iconos"> <a href="https://wa.link/pycw0u" target="_blank" rel="noopener noreferrer">
             <img src="img/icono_w.jpg" onclick="ventana(1);">
                <span>
                 Más Informes </span></a></div>
            <div class="iconos"><img src="img/icono_beneficios.png" data-bs-toggle="modal" data-bs-target="#Beneficios" onclick="ventana(2);"><span>Beneficios</span></div>
            <div class="iconos"><img src="img/icono_ubicacion.png" data-bs-toggle="modal" data-bs-target="#Visitanos" onclick="ventana(3);"><span>Visítanos</span></div>
            <div class="iconos"><img src="img/icomo_servicios.png" data-bs-toggle="modal" data-bs-target="#Servicios"  onclick="ventana(4);"><span>Más Servicios</span></div>
            <div class="iconos">
              <a href="https://www.facebook.com/SegurosExpressmx" target="_blank" rel="noopener noreferrer">
                <img src="img/icono_face.png"  onclick="ventana(5);"><span>¡Síguenos!</span></a></div>
        </div>
        <div class="footer">
          <div class="icono_empresa">
            <img src="img/icono_se.png" ><span>Agente Certificado |</span><span> Aviso de privacidad</span>
          </div>      
        </div>
    </div>


<!-- Modal Beneficios-->
<div class="modal fade" id="Beneficios" tabindex="-1" aria-labelledby="Beneficios" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <!--  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="titulosm">Nuestros Beneficios</p>
        <p class="datos">Atención perzonalizada</p>
        <p class="datos">Cancelas cuando quieras, sin trabas</p>
        <p class="datos">Apoyo en Siniestros</p>
        <p class="titulosm">Coberturas</p>
        <p class="datos">Daños Materiales, Robo Total del Automóvil, Responsabilidad Civil por Daños a Terceros, Gastos Médicos a Ocupantes, 
            Gastos Legales, Muerte al Conductir por Accidente Automovilistico.
        </p>
        <p class="titulosm">Todos los Beneficios</p>
        <p class="datos">Servicios Premium</p>
        <p class="datos">Auto Sustituto por Robo o Pérdida Total</p>
        <p class="datos">Elimina Deducible</p>
        <p class="datos">Servicios Funerarios</p>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<!-- Modal Beneficios-->
<div class="modal fade" id="Visitanos" tabindex="-1" aria-labelledby="Visitanos" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <!--  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="titulosm">Visítanos</p>
        <p class="datos">Lindavista, Av. Montevideo 192, Lindavista Sur, Gustavo A.Madaero, 07300 Ciudad de México, CDMX</p>
        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30090.02158343139!2d-99.129343!3d19.487761!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4821f9d200293b16!2sSeguros%20Express!5e0!3m2!1ses!2smx!4v1620016102507!5m2!1ses!2smx" width="100%" height="360" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    
        </div>
    </div>
  </div>
</div>
<!-- Modal -->

<!-- Modal Beneficios-->
<div class="modal fade" id="Servicios" tabindex="-1" aria-labelledby="Servicios" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <!--  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="titulosms">Más Servicios</p>
          <form action="">
            <input type="text" class="text2" name="Nombre" placeholder="Nombre" id="">
            <input type="text" class="text2" name="Mail" placeholder="E-mail" id="">
            <input type="text" class="text2" name="Telefono" placeholder="Teléfono" id="">
            <select name="tipo" class="text2" id="">
              <option value="1">Seguro de Vida</option>
              <option value="2">Seguro de Carga</option>
              <option value="3">Seguro para el Hogar</option>
              <option value="4">Seguro de Pyme</option>
              <option value="5">Fondos de Inversión para el Retiro</option>
            </select>
          </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
	<script src="js/simplyCountdown.min.js"></script>
	<script src="js/countdown.js"></script>
</body>
</html>