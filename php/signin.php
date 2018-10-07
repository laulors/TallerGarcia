<?php
	require_once 'config.php';
	require_once 'methods.php';

	if (isset($_POST['btnLogin'])) {
		$user = $_POST['user'];
		$pass = $_POST['password'];

		if(!empty($user)&&!empty($pass)){
			$db = db();
			$conexion = dbconnection($db);
			if($conexion){
				$work = array();
				$h = $conexion->prepare('SELECT * FROM empleado WHERE nickname = :user');
				$h->execute(array(':user'=>$user));
				$data = $h->fetch(PDO::FETCH_ASSOC);
				if (!empty($data)) {
					$pass = $data['id'].md5($pass);
					if($pass == $data['contrasena']){
						$work =['work' => 'true'];
						echo json_encode($work);
					}else {
						$work =['work' => 'false','message' => 'Contraseña no coincide'];
						echo json_encode($work);
					}
				}else {
					$work =['work' => 'false','message'=> 'El usuario '.$user.' no existe'];
					echo json_encode($work);
				}
			}
		}
	}
?>
