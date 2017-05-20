<?php
$alfa=$_POST["alfa"];
$con=mysqli_connect("localhost", "root", "", "js");
if ($con)

	$queryu="SELECT * FROM usuario";
	$res=mysqli_query ($con, $queryu);
	$fila=mysqli_fetch_assoc($res);

	for ($beta=0; $beta < $alfa; $beta++)
		$fila=mysqli_fetch_assoc($res);

	if($fila)
		echo $fila['id_usuario'].",".$fila['nombre_usuario'].",".$fila['password'];



?>
