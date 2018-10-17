<?php
	require_once 'config.php';
	require_once 'methods.php';

	if(isset($_GET['elect'])){
		
		$cnfg = db();
		$conexion = dbconnection($cnfg);
		$query = $conexion ->prepare('SELECT elect.id, tipoelect.nombre, marca, modelo FROM elect INNER JOIN tipoelect ON tipoelect.id = elect.idtipoelect;');
		$query->execute();
		$info = $query->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($info);
	}
?>