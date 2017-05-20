<?php
$con=mysqli_connect("localhost", "root", "", "js");
if ($con)

	$queryp="SELECT * FROM publicacion";
	$resp=mysqli_query ($con, $queryp);
	$filap=mysqli_fetch_assoc($resp);

	while($filap)
	{
		echo $filap['id_publicacion'].",".$filap['id_usuario'].",".$filap['texto_publicacion'].",".$filap['tiempo_publicacion'].",";
		$filap=mysqli_fetch_assoc($resp);
	}
?>
