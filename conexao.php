<?php

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$db_name = "bd_serviceti";


	try{
			
		$conn = mysqli_connect($servidor, $usuario, $senha, $db_name);

		date_default_timezone_set("America/Manaus");

		require('url.php');

	}catch (Exception $ex){
					
		echo "<script> alert ('SISTEMA TEMPORARIAMENTE INDISPONÍVEL!');</script>";

		exit();
				
	}
	
?>