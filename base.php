<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cool San Fernando</title>

	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">

	<!-- favIcon para el titulo -->
	<link rel="icon" href="images/logoCSF_2.ico">

</head>
<body>
	<header class="container-fluid"><!--contenido fluido, ocupa el ancho de la pantalla-->
		<!--fila-->
		<div class="row">

			<!--columna-->
			<div class="col-4">

				<div>
					<a href=""><img id="logoPequeño" src="images/logoCSF.png" alt="logoPequeño"></a>
				</div>

				<div>
					<!--<a href=""><img id="logoGrande" src="images/logoCoolSanFernando2.png" alt="logoGrande"></a>-->
					<h4 id="logoGrande" class="text-center mt-1">Cool<br>San Fernando</h4>
				</div>

			</div>

			<!--columna-->
			<div class="col-4 border">

				<!--aca estuvo el logo grande-->	
				<nav class="navbar navbar-light mt-2">
				  <form class="cols-md-6 mx-auto" >

				  	<div class="form-row justify-content-center">

					  	<div class="cols-md-6 mx-4 ml-0 pl-0">
						      <input id="buscar" name="buscar" placeholder="Buscar" type="text" class="form-control">
						</div>

						<div>
							<button name="submit" type="submit" class="btn btn-secondary">Buscar</button>
						</div>

				  	<!-- <div class="input-group xl-5">

						<input type="text" class="form-control" placeholder="Buscar">

						<div class="input-group-append">

							<button class="btn btn-outline-secondary" type="button" id="button-addo2">Buscar</button>

						</div>

					</div> -->
					</div>
				  </form>
				</nav>			
			</div>

			<!--columna-->
			<div class="col-4 align-content-center">

				<div>
					<a href=""><button type="button" class="btn btn-outline-secondary" id="bIngresar" onclick="">Registrate</button></a>
					<a href=""><button type="button" class="btn btn-outline-secondary" id="bRegis" onclick="">Ingresá</button></a>
				</div>
			</div>
		</div>
	</header>

	<?php

		include "index.php";

	?>

	<footer>
		FOOT
	</footer>
	
	<script>
	</script>
	<script src="vendor/jquery/jquery-3.4.1.min.js"></script>
	<script src="vendor/popper/popper.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>