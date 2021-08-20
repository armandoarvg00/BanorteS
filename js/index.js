$(document).ready(function(){
 
	let controlador = "WEB-INF/Controllers/Controller_Ventas.php";
	var form = "#form";
	var inputs = $("input[type=file]"),
	files = [];
    $(form).validate({
        rules: {
            nombre: {required: true},
            email: {required: true,  email: true},
            telefono: {required: true},
            cp: {required: true, maxlength:6},
            marca: {required: true},
            anio: {required: true},
            modelo: {required: true},
            edad: {required: true, maxlength:2}
        },
        messages: {
            nombre: {required: " * Ingrese un nombre por favor"},
            email: {required: " * Ingrese un email por favor",  email:  " * Ingrese un email valido por favor"},
            telefono: {required: " * Ingrese un telefono por favor"},
            cp: {required: " * Ingrese un cp por favor", maxlength: " * Ingrese un cp valido por favor"},
            marca: {required: " * Ingrese un marca por favor"},
            anio: {required: " * Ingrese un anio por favor"},
            modelo: {required: " * Ingrese un modelo por favor"},
            edad: {required: " * Ingrese un edad por favor", maxlength:" * Ingrese un edad valida por favor"}

        }
    });
    $("#enviar").click(function(event){
        if ($(form).valid()) {
            $.post(controlador, {form: $(form).serialize()}).done(function(data) {
                location.href ="https://segurosexpress.mx/Banorte_2/Gracias.html";

               /* if (data.toString().indexOf("Error:") === -1) { 
                    var datos = data.split("//");
                    var mensaje = "La orden de compra <b>" + datos[0] + "</b> se ";
                    if($("#txt_id_oc").length && $("#txt_id_oc").val() === ""){//Se creó
                        mensaje += "guardó con éxito.";
                    }else{//Se modificó
                        mensaje += "modificó con éxito.";
                    }
                    //cambiarContenidosEditando1IdConMensaje(paginaExito, id_menu, id_submenu, "editar", datos[1], mensaje);
                    alert(mensaje);
                } else {
                    //alertaMensaje(data);
                    $('#mensajes').html(data);
                    finished();
                }*/
            });    
        }else{
            event.preventDefault();
        } 
    });

 });
