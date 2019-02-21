<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<link rel="icon" href="../images/16x16.png">

	<title>Refigeración García</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

	<link href="../css/dashboard.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!--[if lt IE 9]><script src="../js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="../js/ie-emulation-modes-warning.js"></script>
	<script src="../js/jquery-3.3.1.min.js"></script>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Refigeración García</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-users"></i> Clientes <i class="fa fa-caret-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href="agregarCliente.html"><i class="fa fa-user-plus"></i> Agregar Cliente</a></li>
							<li><a href="mostrarCliente.html"><i class="fa fa-list-alt"></i> Mostrar Clientes</a></li>
							<li><a href="buscarCliente.html"><i class="fa fa-search"></i> Buscar Cliente</a></li>
							<li><a href="eliminarCliente.html"><i class="fa fa-user-times"></i> Eliminar Cliente</a></li>
							<li><a href="modificarCliente.html"><i class="fa fa-pencil"></i> Modificar Cliente</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-briefcase"></i> Trabajos <i class="fa fa-caret-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href="agregarTrabajo.html"><i class="fa fa-plus"></i> Agregar Trabajo</a></li>
							<li><a href="mostrarTrabajos.html"><i class="fa fa-list-alt"></i> Mostrar Trabajos</a></li>
							<li><a href="buscarTrabajo.html"><i class="fa fa-search"></i> Buscar Trabajo</a></li>
							<li><a href="eliminarTrabajo.html"><i class="fa fa-trash-o"></i> Eliminar Trabajo</a></li>
							<li><a href="modificarTrabajo.html"><i class="fa fa-pencil"></i> Modificar Trabajo</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-gear"></i> Piezas <i class="fa fa-caret-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href="agregarPieza.html"><i class="fa fa-cart-plus"></i> Agregar Pieza</a></li>
							<li><a href="mostrarPiezas.html"><i class="fa fa-list-alt"></i> Mostrar Piezas</a></li>
							<li><a href="buscarPieza.html"><i class="fa fa-search"></i> Buscar Pieza</a></li>
							<li><a href="eliminarPieza.html"><i class="fa fa-trash-o"></i> Eliminar Pieza</a></li>
							<li><a href="modificarPieza.html"><i class="fa fa-pencil"></i> Modificar Pieza</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-handshake-o	"></i> Rentas <i class="fa fa-caret-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href="agregarRenta.html"><i class="fa fa-plus"></i> Agregar Renta</a></li>
							<li><a href="mostrarRentas.html"><i class="fa fa-list-alt"></i> Mostrar Rentas</a></li>
							<li><a href="buscarRentas.html"><i class="fa fa-search"></i> Buscar Renta</a></li>
							<li><a href="eliminarRenta.html"><i class="fa fa-trash-o"></i> Eliminar Renta</a></li>
							<li><a href="modificarRenta.html"><i class="fa fa-pencil"></i> Modificar Renta</a></li>
						</ul>
					</li>

				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../php/exit.php">Salir <i class="fa fa-fw fa-sign-out"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">
				<ul class="nav nav-sidebar">
					
				</ul>
				<ul class="nav nav-sidebar">
					
				</ul>
				<ul class="nav nav-sidebar">
					
				</ul>
			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<div class="row placeholders">
					<div class="col-xs-6 col-sm-3 placeholder">
						<a href=""><img src="../images/EnRenta.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
						<a href=""><h4>Lavadoras disponibles</h4></a>
						<a href=""><span class="text-muted">Muestra las lavadoras que tenemos disponibles para renta.</span></a>
					</div>
					<div class="col-xs-6 col-sm-3 placeholder">
						<a href=""><img src="../images/PorRecoger.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
						<a href=""><h4>Lavadoras por recoger</h4></a>
						<a href=""><span class="text-muted">Muestra las lavadoras que tenemos actualmente en renta y detalles de la misma.</span></a>
					</div>
					<div class="col-xs-6 col-sm-3 placeholder">
						<a href=""><img src="../images/SinExistencia.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
						<a href=""><h4>Piezas sin existencia</h4></a>
						<a href=""><span class="text-muted"> Muestra las refacciones que no tienen existencia.</span></a>
					</div>
					<div class="col-xs-6 col-sm-3 placeholder">
						<a href=""><img src="../images/ProximasAvencer.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
						<a href=""><h4>Piezas proximas a vencer</h4></a>
						<a href=""><span class="text-muted"> Muestra las refacciones que casi se agotan.</span></a>
					</div>
				</div>

				<h2 class="sub-header">Trabajos pendientes</h2>
				</div>
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>
		window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')
	</script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/holder.min.js"></script>
	<script src="../js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
