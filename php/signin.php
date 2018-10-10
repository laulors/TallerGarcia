<?php
	
	require_once 'config.php';
	require_once 'methods.php';

	if (isset($_POST['btnLogin'])) {
		
		$user = $_POST['user'];
		$pass = $_POST['password'];

		if(!empty($user)&&!empty($pass)){
			
			session_start();
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
						
						$work = ['work' => 'true'];
						$info = ['nickname' => $data['nickname'],'idempleado' => $data['id']];
						$_SESSION['user'] = json_encode($info);
						if(!isset($_SESSION['user'])){
							echo "nope";
						}else{
							echo json_encode($work);
						}

					}else {
						
						session_destroy();
						$work = ['work' => 'false','message' => 'Contraseña no coincide'];
						echo json_encode($work);
					}
				}else {
					
					session_destroy();
					$work =['work' => 'false','message'=> 'El usuario '.$user.' no existe'];
					echo json_encode($work);
				}
			}
		}
	}
?>
