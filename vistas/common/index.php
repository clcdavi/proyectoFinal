<section>
		
			<form class="col-md-7 mx-auto">
					  <div class="form-row justify-content-center">

						<div class="cols-xs-12 col-md-3 my-2">
					      <select id="categoria" name="categoria" class="custom-select">
							

					      </select>
						</div>

						<div class="cols-xs-12 col-md-7 my-2">
					      <input id="buscar" name="buscar" placeholder="Buscar" type="text" class="form-control">
						</div>

						<div class="my-2">
					      <button onclick="enviarBusqueda();" name="submit" type="button" class="btn btn-primary">Buscar</button>
						</div>
						
						<?php 
							if ( isset($_SESSION["usuario"]) ){ ?>
								<div class="mt-4 mb-2">					    
		   					    	<a href="#" class="mx-4" name="favoritos">Favoritos</a>

									<a href="#" class="mx-4" name="favoritos">Historial</a>

									<a href="index.php?m=pubs&a=new" class="mx-4" name="publicar">Publicar</a>

									<a href="index.php?m=pubs&a=list" class="mx-4" name="publicar">Mis publicaciones</a>
								</div>
						<?php } ?>

					  </div>

					</form>

				</div>
			</div>

		<!----------------
		<div class="container-fluid border" style="height: 50px;">
			<!-en esta fila, el "justify-content-between" hace que mis 5 columnas de "2 espacios c/u" se organicen y centren de entre los 12 espacios de bootstrap->
			<div class="row justify-content-between" id="navDropdown1">
				<div class="col-2">
					<div class="dropdown mb-3">
						<button class="btn btn-info dropdown-toggle" type="button" id="dropdownBotonPelu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							Peluquería
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuBoton">
							<a href="#" class="dropdown-item ">pelu</a>
							<a href="#" class="dropdown-item btn-warning">pelu</a>
							<a href="#" class="dropdown-item btn-success">pelu</a>
						</div>
					</div>
				</div>
				<div class="col-2">
					<div class="dropdown mb-3">
						<button class="btn btn-info dropdown-toggle" type="button" id="dropdownBotonPelu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							Barbería
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuBoton">
							<a href="#" class="dropdown-item ">barb</a>
							<a href="#" class="dropdown-item btn-warning">barb</a>
							<a href="#" class="dropdown-item btn-success">barb</a>
						</div>
					</div>
				</div>
				<div class="col-2">
					<div class="dropdown mb-3">
						<button class="btn btn-info dropdown-toggle" type="button" id="dropdownBotonPelu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							Manicuría
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuBoton">
							<a href="#" class="dropdown-item ">mani</a>
							<a href="#" class="dropdown-item btn-warning">mani</a>
							<a href="#" class="dropdown-item btn-success">mani</a>
						</div>
					</div>
				</div>
				<div class="col-2">
					<div class="dropdown mb-3">
						<button class="btn btn-info dropdown-toggle" type="button" id="dropdownBotonPelu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							Pedicuría
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuBoton">
							<a href="#" class="dropdown-item ">pedi</a>
							<a href="#" class="dropdown-item btn-warning">pedi</a>
							<a href="#" class="dropdown-item btn-success">pedi</a>
						</div>
					</div>
				</div>
				<div class="col-2">
					<div class="dropdown mb-3">
						<button class="btn btn-info dropdown-toggle" type="button" id="dropdownBotonPelu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							Estética
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuBoton">
							<a href="#" class="dropdown-item ">estetica</a>
							<a href="#" class="dropdown-item btn-warning">estetica</a>
							<a href="#" class="dropdown-item btn-success">estetica</a>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		
		<div class="row  bg-primary h-100 justify-content-between">
			
			<div class="col-md-2 h-100 border">
				
				<h3>
					Estas en Cool San Fernando
				</h3>

				<p>
					Encontra el salón que mas se adapte a tu estilo.
				</p>
				<p>
					Busca por categoría o simplemente escribiendo el nombre de tu favorito.
				</p>

			</div>
			<div class="col-md-8 h-100 border"></div>
			<div class="col-md-2 h-100 border"></div>

		</div>

	</section>