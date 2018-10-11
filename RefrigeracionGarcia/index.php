<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ingresar a sistema</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/signin.css">
	<link rel="stylesheet" href="css/sticky-footer.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/md5.min.js"></script>
</head>
<body>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#messages').hide();
			var usrInput = /[A-z0-9.-_]*/g;
			$('#user').focusout(function() {
				var usr = $(this).val();
				if (usrInput.test(usr)) {
					$(this).parent().removeClass('has-error');
				} else {
					$(this).parent().addClass('has-error');
				}
			});

			$('#login').submit(function(e) {
				e.preventDefault();
				var usr = $('#user').val(),
					passw = md5($('#password').val());
				if (usr != '' && passw != '') {
					var a = $(this).serializeArray();
					a.push({
						name: 'btnLogin',
						value: 'true'
					});
					$.ajax({
							url: 'php/signin.php',
							type: 'POST',
							// dataType: 'Intelligent Guess',
							data: a
						})

						.done(function(dta){

							dta = JSON.parse(dta);
							switch (dta.work) {
								case "true":
									window.location.replace("html/index.php");
								break;
								case "false":
									$('#messages').append('<li>'+dta.message+'</li>')
								break;
							}
							console.log(dta);

						})

						.fail(function() {
							console.log("error");
						});
				}

			});

		});
	</script>
	<div class="container">
		<form class="col-md-4 col-md-offset-4 form-signin text-center" id="login">
			<h1 class="">Iniciar Sesión</h1>

			<div>
				<label for="user">Usuario</label>
				<input type="text" id="user" name="user" value="" class="form-control">
			</div>
			<div>
				<label for="password">Contraseña</label>
				<input type="password" id="password" name="password" value="" class="form-control">
			</div>
			<input type="submit" id="login" value="Entrar" name="login" value="" class="btn btn-primary">
		</form>
		<ul class="col-md-4 col-md-offset-4 list-unstyled alert alert-danger" role="alert" id="messages"></ul>
	</div>
	<footer class="footer">
		<div class="contained">
			<p class="text-muted">Si olvidaste la contraseña contacta al administrador.</p>
		</div>
	</footer>
</body>

</html>
