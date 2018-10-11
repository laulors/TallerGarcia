<?php
	require 'config.php';
	require 'methods.php';

	// $conexion = dbconnection(db());
	if($conexion){
		function loadWorks($h){
			$h->execute();
			$data = $h->fetch_All(PDO::FETCH_ASSOC);

			return $data;
		}

		function loadRentals($h){
			$h->execute();
			$data = $h->fetch_All(PDO::FETCH_ASSOC);
		}

		$errorhandler = array();
		$hdler = $conexion->prepare('SELECT * FROM trabajos');
		$worksData = loadWorks($hdler);
		if(empty($worksData)){
			$errorhandler = ['empty','true'=>'No hay trabajos registrados'];
			echo json_encode($errorhandler);
		}else{
			$errorhandler = ['empty','false'];
			echo json_encode($errorhandler);
		}
		$hdler = $conexion->prepare('SELECT * FROM renta');
		$rentalData = loadRentals($hdler);
		if(empty($rentalData)){
			$errorhandler = ['empty','true'=>'No hay rentas registradas'];
			echo json_encode($errorhandler);
		}else{
			$errorhandler = ['empty','false'];
			echo json_encode($errorhandler);
		}
	}
?>