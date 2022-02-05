<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Inicio de sesion - Full Pelis</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<style type="text/css">
			body{	
				box-sizing: border-box;
				background-color: #E8F0F8;
			}

			#seccion_formulario{
				background-color: #fff;
			}

			#contenedor{
				width: 97%;
				max-width: 800px;
			}

			#logo{
				background-image: url("https://fullentretenimiento.com/assetsDashboard/img/persona-ingreso.png");
				background-color: #2576CD;
				background-size: cover;
			}

			.form-text > h4{
				font-size: 1em;
			}

			.form-text > p{
				font-size: 0.8em;
			}
		</style>
	</head>
	<body class="vh-100 d-flex justify-content-center align-items-center p-4">

		<div class="row shadow" id="contenedor">

			<div class="col-lg-5 d-none d-lg-inline" id="logo"></div>

			<div class="col-lg-7 px-4 py-2" id="seccion_formulario">
				<div class="text-center p-4">
					<img src="https://fullentretenimiento.com/assetsInicio/img/black-logo.png" alt="">
				</div>	
				<div class="form-text">
					<h4>INICIAR SESION</h4>
					<p>Inicie sesión para crear, descubrir y conectarse con toda la comunidad <strong>Full entretenimiento</strong></p>
				</div>
				<form action="#">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Correo electronico</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su correo electronico">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Contraseña</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
				  </div>
				  <!-- <div class="form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Mantener sesion</label>
				  </div> -->
				  <button type="submit" class="btn btn-primary btn-block">Iniciar sesion</button>

				  <div class="mt-2">
				  	<a href="#">¿Se te olvido tu contraseña?</a>
				  	<p>¿No tienes cuenta?<a href="#"> Registrarse aqui</a></p>
				  </div>
				</form>
			</div>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
	</body>
</html>