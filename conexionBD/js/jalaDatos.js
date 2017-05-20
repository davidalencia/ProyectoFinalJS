var vector=new Array();

function usuario() {
	$.ajax({
                url:   '../conexionBD/php/usuario.php',
                type:  'get',
                success:  function (response) {
                      console.log(response);
                }
        });
}
function comentario() {
	$.ajax({
                url:   '../conexionBD/php/comentario.php',
                type:  'get',
                success:  function (response) {

                },
        });
}
function publicacion() {
	$.ajax({
                url:   '../conexionBD/php/publicacion.php',
                type:  'get',
                success:  function (response) {
                       console.log(response);
                }
        });
}
usuario();
