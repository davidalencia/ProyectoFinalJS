<?php
$con=mysqli_connect("localhost", "root", "", "js");
if ($con)
		
	$queryu="SELECT * FROM USUARIO";
	$res=mysqli_query ($con, $queryu);
	$fila=mysqli_fetch_assoc($res);
	print_r ($fila);
	while($fila)
	{
		echo $fila['id_usuario'];
		echo $fila['nombre_usuario'];
		echo $fila['password'];
		echo "<br/>";
		$fila=mysqli_fetch_assoc($res);
	}

	$queryc="SELECT * FROM COMENTARIO";
	$resc=mysqli_query ($con, $queryc);
	$filac=mysqli_fetch_assoc($resc);
	print_r ($filac);
	while($filac)
	{
		echo $filac['id_comentario'];
		echo $filac['id_publicacion'];
		echo $filac['id_usuario'];
		echo $filac['texto_comentario'];
		echo $filac['tiempo_comentario'];
		echo "<br/>";
		$filac=mysqli_fetch_assoc($resc);
	}

	$queryp="SELECT * FROM PUBLICACION";
	$resp=mysqli_query ($con, $queryp);
	$filap=mysqli_fetch_assoc($resp);
	print_r ($filap);
	while($filap)
	{
		echo $filap['id_publicacion'];
		echo $filap['id_usuario'];
		echo $filap['texto_publicacion'];
		echo $filap['tiempo_publicacion'];
		echo "<br/>";
		$filap=mysqli_fetch_assoc($resp);
	}
?>