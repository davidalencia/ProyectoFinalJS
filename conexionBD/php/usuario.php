<?php
$con=mysqli_connect("localhost", "root", "", "js");
if ($con)
		
	$queryu="SELECT * FROM USUARIO";
	$res=mysqli_query ($con, $queryu);
	$fila=mysqli_fetch_assoc($res);
	
	while($fila)
	{
		echo $fila['id_usuario'].",".$fila['nombre_usuario'].",".$fila['password'].",";
		$fila=mysqli_fetch_assoc($res);
	}

?>