<?php 

	require_once 'config.php';
	require_once 'methods.php';

	if (isset($_GET['rentas'])) {
		$cnf = db();
		$conn = dbconnection($cnf);

		$query = prepare('SELECT r.id, r.fechaIr, r.fechaFin, u.nombre, u.apellidop, r.pago, sl.marca, sl.color FROM renta r 
INNER JOIN stocklavadoras sl ON r.idlavadora = sl.id
INNER JOIN empleado e ON e.id = r.idempleado
INNER JOIN cliente c ON c.id = r.idcliente
INNER JOIN usuario u ON e.idusuario = u.id OR c.idusuario = u.id');
		$query->execute();
		$info = $query->fetchAll(PDO::ASSOC);

		echo json_encode($info);
	}
?>