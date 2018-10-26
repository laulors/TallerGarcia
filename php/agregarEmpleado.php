<?php
	require_once 'config.php';
	require_once 'methods.php';

	if (isset($_POST['btnRegister'])) {
		$nombre = strtolower($_POST['campoNombre']);
		$apellidop = strtolower($_POST['campoApellidoP']);
		$apellidom = (empty($_POST['campoApellidoM'])) ? "" : strtolower($_POST['campoApellidoM']);
		$email = strtolower($_POST['campoEmail']);
		$contrasena = strtolower($_POST['contrasena']);
		$apodo = strtolower($_POST['campoApodo']);
		$llave = $nombre.".".$apellidop.".".$apellidom;
		$llave = str_replace(' ','_',$llave);
		$status = array();

		if(!empty($nombre) && !empty($apellidop) && !empty($email) && !empty($contrasena) && !empty($apodo)){
			$cnf = db();
			$conn = dbconnection($cnf);

			if($conn){
				$stmt = $conn->prepare('SELECT * from usuario WHERE llave=:llave');
				$stmt->execute(array(':llave' => $llave));
				$checkuser = $stmt->fetch(PDO::FETCH_ASSOC);

				if (empty($checkuser)) {
					$query = $conn->prepare('INSERT into usuario(nombre,apellidom,apellidop,llave) values(:name,:apm,:app,:ll)');
					$info = $query->execute(array(':name'=> $nombre, ':apm' => $apellidom,':app' => $apellidop, ':ll' => $llave));

					if($info){
						$query = $conn->prepare('SELECT * FROM usuario WHERE llave = :llave');
						$query->execute(array(':llave'=>"$llave"));
						$info = $query->fetch(PDO::FETCH_ASSOC);

						if(!empty($info)){
							$idUsuario = $info['id'];
							$stats = 1;
							$contrasena = md5($contrasena);
							$query = $conn->prepare('INSERT INTO empleado(idusuario,email,nickname,contrasena,situacion) VALUES(:idu, :email, :nname, :psw, :situacion)');
							$info = $query->execute(array(':idu' => $idUsuario, ':email' =>$email, ':nname'=>$apodo, ':psw' =>$contrasena, ':situacion' => $stats));

							if($info){
								$query = $conn->prepare('SELECT id FROM empleado WHERE idusuario = :idu');
								$query->execute(array(':idu' => $idUsuario));
								$info = $query->fetch(PDO::FETCH_ASSOC);

								if(!empty($info)){
									$query = $conn->prepare('UPDATE empleado set contrasena=:psw where idusuario=:idu');
									// $query = $conn->prepare('ALTER empleado(contrasena) VALUES(:psw) WHERE idusuario = :idu'); //WTF!
									$info = $query->execute(array(':psw'=>$info['id'].$contrasena,':idu'=>$idUsuario));
									if ($info) {
										$status = [
											'status'=>'true',
											'icon'=> 'check-circle-o'
										];
										echo json_encode($status);
									}
								}else {
									$status = [
										'status'=>'log',
										'mensaje' =>"No se encontro empleado",
										'icon'=>'exclamation-circle'
									];
									echo json_encode($status);
								}
							}else{
								$status = [
									'status'=>'error',
									'mensaje'=>"Ocurrio un error al crear empleado",
									'icon'=>'exclamation-circle'
								];
								echo json_encode($status);
							}
						}else {
							$status = [
								'status'=>'log',
								'mensaje' =>"No se encontro usuario",
								'icon'=>'exclamation-circle'
							];
							echo json_encode($status);
						}
					}else {
						$status = [
							'status'=>'log',
							'mensaje' =>"Error al crear usuario",
							'icon'=>'exclamation-circle'
						];
						echo json_encode($status);
					}
				}else {
					$status = [
						'status'=>'error',
						'mensaje' =>"El usuario \"$nombre $apellidop $apellidom\" ya existe.",
						'icon'=>'exclamation-triangle'
					];
					echo json_encode($status);
				}
			}else {
				$status = [
					'status'=>'db',
					'mensaje' =>"Error de conexión",
					'icon'=>'exclamation-circle'
				];
				echo json_encode($status);
			}
		}else {
			$status = [
				'status'=>'error',
				'mensaje' =>"Algunos campos obligatorios estan vacios.",
				'icon'=>'exclamation-triangle'
			];
			echo json_encode($status);
		}
	}

?>
