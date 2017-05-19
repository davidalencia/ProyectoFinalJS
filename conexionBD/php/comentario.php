<?php
$con=mysqli_connect("localhost", "root", "", "js");
if ($con)

	$queryc="SELECT * FROM COMENTARIO";
	$resc=mysqli_query ($con, $queryc);
	$filac=mysqli_fetch_assoc($resc);
	
	while($filac)
	{
		echo $filac['id_comentario'].",".$filac['id_publicacion'].",".$filac['id_usuario'].",".$filac['texto_comentario'].",".$filac['tiempo_comentario'].",";

		$filac=mysqli_fetch_assoc($resc);
	}

?>