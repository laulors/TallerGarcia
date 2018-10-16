<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<link rel="icon" href="../images/16x16.png">

	<title>Refigeración García</title>

	<!-- Bootstrap core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../css/dashboard2.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="../js/ie-emulation-modes-warning.js"></script>
	<script src="../js/jquery-3.3.1.min.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!-- AQUI TRUENA CUANDO LE PONES QUE CONTINUE LA SESION Y HACES LA CONEXION CON LA BASE DE DATOS
EL REQUIRED_ONCE DA PEDOS SI ES QUE LO PONES. -->
<?php

require_once '../php/config.php';
require_once '../php/methods.php';

	session_start();

	if(!isset($_SESSION['user'])){
		header('location: ../');
	}

?>
<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users"></i> Clientes <i class="fa fa-caret-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href=""><i class="fa fa-user-plus"></i> Agregar Cliente</a></li>
							<li><a href=""><i class="fa fa-list-alt"></i> Mostrar Clientes</a></li>
							<li><a href=""><i class="fa fa-search"></i> Buscar Cliente</a></li>
							<li><a href=""><i class="fa fa-user-times"></i> Eliminar Cliente</a></li>
							<li><a href=""><i class="fa fa-pencil"></i> Modificar Cliente</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-briefcase"></i> Trabajos <i class="fa fa-caret-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href=""><i class="fa fa-plus"></i> Agregar Trabajo</a></li>
							<li><a href=""><i class="fa fa-list-alt"></i> Mostrar Trabajos</a></li>
							<li><a href=""><i class="fa fa-search"></i> Buscar Trabajo</a></li>
							<li><a href=""><i class="fa fa-trash-o"></i> Eliminar Trabajo</a></li>
							<li><a href=""><i class="fa fa-pencil"></i> Modificar Trabajo</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-gear"></i> Piezas <i class="fa fa-caret-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href=""><i class="fa fa-cart-plus"></i> Agregar Pieza</a></li>
							<li><a href=""><i class="fa fa-list-alt"></i> Mostrar Piezas</a></li>
							<li><a href=""><i class="fa fa-search"></i> Buscar Pieza</a></li>
							<li><a href=""><i class="fa fa-trash-o"></i> Eliminar Pieza</a></li>
							<li><a href=""><i class="fa fa-pencil"></i> Modificar Pieza</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-handshake-o	"></i> Rentas <i class="fa fa-caret-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href=""><i class="fa fa-plus"></i> Agregar Renta</a></li>
							<li><a href=""><i class="fa fa-list-alt"></i> Mostrar Rentas</a></li>
							<li><a href=""><i class="fa fa-search"></i> Buscar Renta</a></li>
							<li><a href=""><i class="fa fa-trash-o"></i> Eliminar Renta</a></li>
							<li><a href=""><i class="fa fa-pencil"></i> Modificar Renta</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../php/exit.php"><i class="fa fa-power-off"></i> Salir</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<!-- <h1 class="page-header">Le puede interesar</h1> -->
				<div class="row placeholders">
					<div class="col-xs-6 col-sm-3 placeholder">
						<img src="../images/EnRenta.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
						<h4>Lavadoras disponibles</h4>
						<span class="text-muted">Muestra las lavadoras que tenemos disponibles para renta.</span>
					</div>
					<div class="col-xs-6 col-sm-3 placeholder">
						<img src="../images/PorRecoger.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
						<h4>Lavadoras por recoger</h4>
						<span class="text-muted">Muestra las lavadoras que tenemos actualmente en renta y detalles de la misma.</span>
					</div>
					<div class="col-xs-6 col-sm-3 placeholder">
						<img src="../images/SinExistencia.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
						<h4>Piezas sin existencia</h4>
						<span class="text-muted">Muestra las refacciones que no tienen existencia.</span>
					</div>
					<div class="col-xs-6 col-sm-3 placeholder">
						<img src="../images/ProximasAvencer.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
						<h4>Piezas proximas a vencer</h4>

						<span class="text-muted">Muestra las refacciones que casi se agotan.</span>
					</div>
				</div>

				<h2 class="sub-header">Trabajos Pendientes</h2>
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Cliente</th>
								<th>Posible falla</th>
								<th>Domicilio</th>
								<th>Clasificación</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1,001</td>
								<td>Lorem</td>
								<td>ipsum</td>
								<td>dolor</td>
								<td>sit</td>
							</tr>
							<tr>
								<td>1,002</td>
								<td>amet</td>
								<td>consectetur</td>
								<td>adipiscing</td>
								<td>elit</td>
							</tr>
							<tr>
								<td>1,003</td>
								<td>Integer</td>
								<td>nec</td>
								<td>odio</td>
								<td>Praesent</td>
							</tr>
							<tr>
								<td>1,003</td>
								<td>libero</td>
								<td>Sed</td>
								<td>cursus</td>
								<td>ante</td>
							</tr>
							<tr>
								<td>1,004</td>
								<td>dapibus</td>
								<td>diam</td>
								<td>Sed</td>
								<td>nisi</td>
							</tr>
							<tr>
								<td>1,005</td>
								<td>Nulla</td>
								<td>quis</td>
								<td>sem</td>
								<td>at</td>
							</tr>
							<tr>
								<td>1,006</td>
								<td>nibh</td>
								<td>elementum</td>
								<td>imperdiet</td>
								<td>Duis</td>
							</tr>
							<tr>
								<td>1,007</td>
								<td>sagittis</td>
								<td>ipsum</td>
								<td>Praesent</td>
								<td>mauris</td>
							</tr>
							<tr>
								<td>1,008</td>
								<td>Fusce</td>
								<td>nec</td>
								<td>tellus</td>
								<td>sed</td>
							</tr>
							<tr>
								<td>1,009</td>
								<td>augue</td>
								<td>semper</td>
								<td>porta</td>
								<td>Mauris</td>
							</tr>
							<tr>
								<td>1,010</td>
								<td>massa</td>
								<td>Vestibulum</td>
								<td>lacinia</td>
								<td>arcu</td>
							</tr>
							<tr>
								<td>1,011</td>
								<td>eget</td>
								<td>nulla</td>
								<td>Class</td>
								<td>aptent</td>
							</tr>
							<tr>
								<td>1,012</td>
								<td>taciti</td>
								<td>sociosqu</td>
								<td>ad</td>
								<td>litora</td>
							</tr>
							<tr>
								<td>1,013</td>
								<td>torquent</td>
								<td>per</td>
								<td>conubia</td>
								<td>nostra</td>
							</tr>
							<tr>
								<td>1,014</td>
								<td>per</td>
								<td>inceptos</td>
								<td>himenaeos</td>
								<td>Curabitur</td>
							</tr>
							<tr>
								<td>1,015</td>
								<td>sodales</td>
								<td>ligula</td>
								<td>in</td>
								<td>libero</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-3 col-md-2 sidebar">
		<h2 class="page-header">Próximas Rentas</h2>
	</div>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>
		window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')
	</script>
	<script src="../js/bootstrap.min.js"></script>
	<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
	<script src="../js/vendor/holder.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
