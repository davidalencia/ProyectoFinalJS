<?php
$alfa=$_POST["alfa"];
$con=mysqli_connect("localhost", "root", "", "js");
if ($con)

	$queryp="SELECT * FROM publicacion";
	$resp=mysqli_query ($con, $queryp);
	$filap=mysqli_fetch_assoc($resp);

	for ($beta=0; $beta < $alfa; $beta++)
		$filap=mysqli_fetch_assoc($resp);

	if($filap)
		echo $filap['id_publicacion'].",".$filap['id_usuario'].",".$filap['texto_publicacion'].",".$filap['tiempo_publicacion'].",";

?>
