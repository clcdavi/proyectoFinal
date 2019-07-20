<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cool San Fernando</title>

	<meta name="description" content="Sitio lider de San fernando en busqueda de salones">
    <meta name="author" content="Curso PHP SF 2019">

    <link href="<?= PATH_VENDOR ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="<?= PATH_CSS ?>/styles.css" rel="stylesheet">

	<!-- favIcon para el titulo -->
	<link href="<?=PATH_IMAGENES?>/logoCSF_2.ico" rel="icon">

	<!-- no cambia la letra |-_-|  -->
	<link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">

</head>
<body>
	<header class="container-fluid"><!--contenido fluido, ocupa el ancho de la pantalla-->
		<!--fila-->
		<div class="row">

			<!--columna-->
			<div class="col-4">

				<div>
					<a href=""><img id="logoPequeño" src="<?=PATH_IMAGENES?>/logoCSF.png" alt="logoPequeño"></a>
				</div>

				<div>
					<!--<a href=""><img id="logoGrande" src="images/logoCoolSanFernando2.png" alt="logoGrande"></a>-->
					<h4 id="logoGrande" class="text-center mt-1">Cool<br>San Fernando</h4>
				</div>

			</div>

			
			<div class="col-4">
				
				<!--<nav class="navbar navbar-light mt-2">
				  <form class="cols-md-6 mx-auto" >

				  	<div class="form-row justify-content-center">

					  	<div class="cols-md-6 mx-4 ml-0 pl-0">
						      <input id="buscar" name="buscar" placeholder="Buscar" type="text" class="form-control">
						</div>

						<div>
							<button name="submit" type="submit" class="btn btn-secondary">Buscar</button>
						</div>

				  	<div class="input-group xl-5">

						<input type="text" class="form-control" placeholder="Buscar">

						<div class="input-group-append">

							<button class="btn btn-outline-secondary" type="button" id="button-addo2">Buscar</button>

						</div>

					</div> 
					</div>
				  </form>
				</nav>-->		
			</div>

			
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
	<script src="<?= PATH_VENDOR ?>/jquery/jquery-3.4.1.min.js"></script>
	<script src="<?= PATH_VENDOR ?>/popper/popper.min.js"></script>
	<script src="<?= PATH_VENDOR ?>/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>