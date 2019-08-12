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

	<!-- favIcon -->
	<link href="<?=PATH_IMAGENES?>/logoCSF_2.ico" rel="icon">

	<!-- fuente -->
	<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

</head>
<body>
	<div class="container-fluid p-0">
	<header><!--contenido fluido, ocupa el ancho de la pantalla-->
		<!--fila-->
		<div class="row">

			<!--columna-->
			<div class="col-4">

				<div>
					<a href="index.php?m=index"><img id="logoPequeño" src="<?=PATH_IMAGENES?>/logoCSF.png" alt="logoPequeño"></a>
				</div>

				<div>
					<h4 id="logoGrande" class="text-center mt-1">Cool<br>San Fernando</h4>
				</div>

			</div>

			
			<div class="col-4 d-flex align-items-center justify-content-center p-0">
				
				<div>

				    <p id="medio">
						Encontra el salón que mas se adapte a tu estilo.
					</p>

				</div>
						
			</div>

			
			<div class="col-4 align-content-center">

				<?php 
				if ( !isset($_SESSION["usuario"]) ){ ?>
					<div>
						<a data-toggle="modal" data-target="#exampleModalR" class="nav-link" href=""><button type="button" class="btn btn-outline-primary" id="bRegis" onclick="">Registrate</button></a>

						<a data-toggle="modal" data-target="#exampleModal" class="nav-link" href="#"><button type="button" class="btn btn-outline-primary" id="bIngresar" onclick="">Ingresá</button></a>
					</div>
				<?php 
				}
				else{
				?>
					<div class="nav-item dropdown d-flex">
						<a class="nav-link dropdown-toggle ml-auto" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"><?= $_SESSION["usuario"] ?></a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Cuenta</a>
							<a class="dropdown-item" href="index.php?m=logout">Salir</a>
						</div>
					</div>
				<?php 
				}
				?> 

			</div>
		</div>
	</header>

	<?php 

		$tipo_alerta = "danger";

		if ( isset($_GET["s"] ) ){

			$mensaje_alerta = $_GET["s"];
			$tipo_alerta = $_GET["t"]; //Tipo de alerta

		}

		if ( isset($mensaje_alerta) ){?>

		<div class="alert alert-<?=$tipo_alerta?> alert-dismissible fade show text-center">
	    	<button type="button" class="close" data-dismiss="alert">&times;</button>
		    <?= $mensaje_alerta ?>
		</div>

	<?php 
		}
	?>
	
	<?php
		include( PATH_VIEWS . '/common/partials/index.php' );
	?>

	<!-- Modal de ingreso-->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Ingresá a Cool San Fernando</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">

			<div class="row justify-content-center">
				<div class="col-md-8">
					<form action="index.php" role="form" method="POST">

						<input type="hidden" name="m" value="login">

						<div class="form-group">
							 
							<label for="user_name">Nombre de usuario</label>

							<input type="text" class="form-control" name="user_name" id="user_name" />
						</div>

						<div class="form-group">
							 
							<label for="password">Contraseña</label>

							<input type="password" class="form-control" name="password" id="password" />
						</div>

						<button type="submit" class="btn btn-primary">
							Ingresar
						</button>

					</form>
				</div>
			</div>

	      </div>
	      
	    </div>
	  </div>
	</div>

</div>
	<!-- Modal de Registro-->
	<div class="modal fade" id="exampleModalR" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Registro en Cool San Fernando</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">

			<div class="row justify-content-center">
				<div class="col-md-8">
					<form action="index.php" role="form" method="POST">

						<input type="hidden" name="m" value="sign_up">

						<div class="form-group">
							 
							<label for="user_name">Nombre de usuario</label>

							<input type="text" class="form-control" name="user_name" />
						</div>

						<div class="form-group">
							 
							<label for="user_email">Email</label>

							<input type="email" class="form-control" name="user_email" id="user_email" />
						</div>

						<div class="form-group">
							 
							<label for="password">Contraseña</label>

							<input type="password" class="form-control" name="password" />
						</div>

						<!-- <div class="form-group">
							 
							<label for="password">Confirmar contraseña</label>

							<input type="password" class="form-control" name="password" id="password" />
						</div> -->

						<button type="submit" class="btn btn-primary">
							Enviar
						</button>

					</form>
				</div>
			</div>

	      </div>
	      
	    </div>
	  </div>
	</div>
</div> 
</div>
<!-- footer -->
	<?php 
		include( PATH_VIEWS . '/common/partials/footer.php' );
	 ?>
		
	<script>

    	function enviarBusqueda(){
    		
			var urlBusqueda = 'index.php?buscar=' + $("#buscar").val() +
							  '&categoria=' + $("#categoria").val() + 
							  '&orden=' + $("#orden").val();

			window.setTimeout( window.location = urlBusqueda, 100 );	

	    }

	</script>
	

	<script src="<?= PATH_VENDOR ?>/jquery/jquery-3.4.1.min.js"></script>
	<script src="<?= PATH_VENDOR ?>/popper/popper.min.js"></script>
	<script src="<?= PATH_VENDOR ?>/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>