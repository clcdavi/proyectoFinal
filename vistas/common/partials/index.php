<section>
		
	<form class="col-md-7 mx-auto">
		<div class="form-row justify-content-center">

			<div class="cols-xs-12 col-md-3 my-2">
				<select id="categoria" name="categoria" class="custom-select">
							
					<?php
						include_once( PATH_HELPERS . "/html_helper.php");

							echo getOptionsComboCategorias(true);
					?>
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
		
		<div class="row  h-100 ">
			
			<div class="col-md-2 h-100 ">
				<br>
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

			<div class="col-lg-8 p-2 h-100 salBox bg-warning ">

				<div class="">
					
					<!--card de salon-->
					<div class="card mb-3" style="max-width: 880px; height: 250px;">
					  <div class="row no-gutters m-2">
					    <div class="col-md-4 mt-1">
					      <img src="<?=PATH_IMAGENES?>/laBarberia.png" class="card-img img-thumbnail "style="max-width: 220px;" alt="laBarberia">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body">
					        <h5 class="card-title">Nombre del Salon</h5>
					        <p class="card-text">Descripcion y datos del salon. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, perferendis, exercitationem accusamus non.</p>
					        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					      </div>
					    </div>
					  </div>
					</div>

					<div class="card mb-3" style="max-width: 880px; height: 250px;">
					  <div class="row no-gutters m-2">
					    <div class="col-md-4 mt-1">
					      <img src="<?=PATH_IMAGENES?>/adara.jpg" class="card-img img-thumbnail "style="max-width: 220px;" alt="laBarberia">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body">
					        <h5 class="card-title">Nombre del Salon</h5>
					        <p class="card-text">Descripcion y datos del salon. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, perferendis, exercitationem accusamus non.</p>
					        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					      </div>
					    </div>
					  </div>
					</div>

					<div class="card mb-3" style="max-width: 880px; height: 250px;">
					  <div class="row no-gutters m-2">
					    <div class="col-md-4 mt-1">
					      <img src="<?=PATH_IMAGENES?>/karinaDarc.jpg" class="card-img img-thumbnail "style="max-width: 220px;" alt="laBarberia">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body">
					        <h5 class="card-title">Nombre del Salon</h5>
					        <p class="card-text">Descripcion y datos del salon. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, perferendis, exercitationem accusamus non.</p>
					        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					      </div>
					    </div>
					  </div>
					</div>

				</div>

			</div>

			<div class="col-md-2 h-75"></div>

			</div>

</section>