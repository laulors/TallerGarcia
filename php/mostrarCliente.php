<?php
	require_once 'config.php';
	require_once 'methods.php';

	if(isset($_GET['Cliente'])){
		$cnf = db();
		$conn = dbconnection($cnf);

		$query = $conn->prepare('SELECT u.nombre,u.apellidop,u.apellidom,c.numeroint,c.numeroext,c.calle,c.colonia,c.municipio,c.telefono FROM usuario u INNER JOIN cliente c ON u.id = c.idusuario;');
		$query->execute();
		$info = $query->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($info);
	}
?>