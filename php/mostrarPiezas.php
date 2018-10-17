<?php 
	require_once 'config.php';
	require_once 'methods.php';

	if(isset($_GET['piezas'])){
	$cnf = db();
	$conn = dbconnection($cnf);

	$query = $conn->prepare('SELECT ');
	$query->execute();
	$info = $query->fetchAll(PDO::ASSOC);
	echo json_encode($info);
	}
?>