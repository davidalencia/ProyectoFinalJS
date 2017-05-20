<?php
$alfa=$_POST["alfa"];
$con=mysqli_connect("localhost", "root", "", "js");
if ($con)

	$queryc="SELECT * FROM comentario";
	$resc=mysqli_query ($con, $queryc);
	$filac=mysqli_fetch_assoc($resc);

	for ($beta=0; $beta < $alfa; $beta++)
			$filac=mysqli_fetch_assoc($resc);

	if($filac)
		echo $filac['id_comentario'].",".$filac['id_publicacion'].",".$filac['id_usuario'].",".$filac['texto_comentario'].",".$filac['tiempo_comentario'].",";



?>
