var vector=new Array();//aqui se guarda cada informacion en su celda
var info;//donde se va a guardar lo que regresa el php
var usu=0, comen=0, publi=0;//lleva la cuenta de en linea/fila de la tabla va

//funciones recoger la informacion
function usuario() {
	$.ajax({
                url:   '../conexionBD/php/usuario.php',
                type:  'post',
								data: {alfa: usu},
                success:  function (response) {
											info=response;
                }
        });
				usu++;
				if ((typeof info!== "undefined")&&info!='' ) {
					vector=info.split(",");
					console.log(vector);
				}

}
function comentario() {
	$.ajax({
                url:   '../conexionBD/php/comentario.php',
                type:  'post',
										data: {alfa: comen},
                success:  function (response) {
										info=response;
                },
        });
				comen++;
				if ((typeof info!== "undefined")&&info!='' ) {
					vector=info.split(",");
					console.log(vector);
				}
}
function publicacion() {
	$.ajax({
                url:   '../conexionBD/php/publicacion.php',
                type:  'post',
								data: {alfa: publi},
                success:  function (response) {
                       info=response;
                }
        });
				publi++;
				if ((typeof info!== "undefined")&&info!=''  ) {
					vector=info.split(",");
					console.log(vector);
				}
}
//es necesario llamar las funciones una vez para evitar que la primera vez te marque undefined (parece no ser necesario para publicacion y siendo sincero no se porqu pero funciona);
