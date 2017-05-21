var infoUsu= new Array();
var usu=0;
//funciones recoger la informacion
function usuario() {
	$.ajax({
                url:   '../conexionBD/php/usuario.php',
                type:  'post',
                success:  function (response) {
											info=response;
                }
        });
				usu++;
				if ((typeof info!== "undefined")&&info!='' ) {
					infoUsu=info.split(",");
				}
}
