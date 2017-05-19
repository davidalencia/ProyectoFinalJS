var a='aaaa';

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
                     return response;
                },
                /*complete: function (data) {
                	console.log(a);
                	return a;
                }*/
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
