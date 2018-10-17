<?php
	require_once 'config.php';
	require_once 'methods.php';
	if (isset($_POST['btnRegister'])) {
		$nombre = $_POST['campoNombre'];
		$apellidop = $_POST['campoApellidoP'];
		$apellidom = (empty($_POST['campoApellidoM']) ? "" : $_POST['campoApellidoM'];
		$email = $_POST['campoEmail'];
		$password = $_POST['contrasena'];
		$apodo = $_POST['campoApodo'];
		$status = array();

		if(!empty($nombre) && !empty($apellidop) && !empty($email) && !empty($password) && !empty($apodo)){
			$cnf = db();
			$conn = dbconnection($cnf);
			if($conn){
				$query = $conn->prepare('INSERT into usuario(nombre,apellidom,apellidop,llave) values(:name,:apm,:app,:ll)');
				$llave = $nombre.".".$apellidop.".".$apellidom;
				$info = $query->execute(array(':name'=> $nombre, ':apm' => $apellidom,':app' => $apellidop, ':ll' => $llave));
				if($info){
					$query = $conn->prepare('SELECT * FROM usuario WHERE llave = :llave');
					$query->execute(array(':llave'=>"$llave"));
					$info = $query->fetch(PDO::FETCH_ASSOC);
					if(!empty($info)){
						$idUsuario = $info['id'];
						$stats = True;
						$contrasena = md5($contrasena);
						$query = $conn->prepare('INSERT INTO empleado(idusuario,email,nickname,contrasena,situacion) VALUES(:idu, :email, :nname, :psw, :stuation)');
						$info = $query->execute(array(':idu' => $idUsuario, ':email' =>$email, ':nickname'=>$apodo, ':contrasena' =>$contrasena, ':situacion' => $stats));
						if(!empty($info)){
							$query = $conn->prepare('SELECT id FROM empleado WHERE idusuario = :idu');
							$query->execute(array(':idu' => $idUsuario));
							$info = $query->fetch(PDO::FETCH_ASSOC);
							if(!empty($info)){

								$query = $conn->prepare('ALTER empleado(contrasena) VALUES(:psw) WHERE idusuario = :idu');
								$query->execute(array(':psw'=>$info['id'].$contrasena,':idu'=>$idUsuario));
								$info = $query->fetch(PDO::FETCH_ASSOC);
							}

						}else{

						}
					}
				}
			}
		}
	} else {
		# code...
	}
	
?>