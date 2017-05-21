<?php
$alfa=$_POST["alfa"];
$con=mysqli_connect("localhost", "root", "", "js");
if ($con)

	$queryp="SELECT * FROM publicacion join usuario where publicacion.id_usuario=usuario.id_usuario;";
	$resp=mysqli_query ($con, $queryp);
	$filap=mysqli_fetch_assoc($resp);

	for ($beta=0; $beta < $alfa; $beta++)
		$filap=mysqli_fetch_assoc($resp);

	if($filap)
		echo $filap['texto_publicacion']."*".$filap['tiempo_publicacion']."*".$filap['nombre_usuario']."*";

?>
