<?php
	require_once 'config.php';
	require_once 'methods.php';

	$cnfg = db();
	$conexion = dbconnection($cnfg);

	if($conexion){
		
		$sqlQuery = $conexion ->prepare('SELECT id, tipoelect.nombre, marca, modelo FROM elect INNER JOIN tipoelect ON tipoelect.id = elect.idtipoelect WHERE :searchE = tipoelect.nombre;');
		$sqlQuery->execute();
		$results = $sqlQuery->fetchAll(PDO::PDO_ASSOC);
		$errors = array();
		/*
			Missing validation code in here
		*/
	}
?>