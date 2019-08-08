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

		</div>

	</form>
		
		<div class="row">
			<!-- side left -->
			<div class="col-md-2">

			<?php 
				if ( !isset($_SESSION["usuario"]) ){ ?>

					<div class="d-flex flex-column mt-5">

						<div class="mt-4 mb-2">					    
			   				<a href="index.php?only_favs" class="mx-4" name="favoritos">Favoritos</a>
			   			</div>

			   			<div  class="mt-4 mb-2">
							<a href="#" class="mx-4" name="favoritos">Comentarios</a>
						</div>

						<div  class="mt-4 mb-2">
							<a href="index.php?m=pubs&a=new" class="mx-4" name="publicar">Publicar</a>
						</div>

						<div  class="mt-4 mb-2">
							<a href="index.php?m=pubs&a=list" class="mx-4" name="publicar">Mis salones</a>
						</div>

					</div>

			<?php } ?>
				
			<?php 
				if ( isset($_SESSION["usuario"]) ){ ?>

					<div class="d-flex flex-column mt-5">

						<div class="mt-4 mb-2">					    
			   				<a href="#" class="mx-4" name="favoritos">Favoritos</a>
			   			</div>

			   			<div  class="mt-4 mb-2">
							<a href="#" class="mx-4" name="favoritos">Comentarios</a>
						</div>

						<div  class="mt-4 mb-2">
							<a href="index.php?m=pubs&a=new" class="mx-4" name="publicar">Publicar</a>
						</div>

						<div  class="mt-4 mb-2">
							<a href="index.php?m=pubs&a=list" class="mx-4" name="publicar">Mis salones</a>
						</div>

					</div>

			<?php } ?>
				
			</div>

			<!--centro-->
			<div class="col-md-8">
				
				<span>
	                	<p>
							Encontra el salón que mas se adapte a tu estilo.
						</p>
						<p>
							Busca por categoría o simplemente escribiendo el nombre de tu favorito.
						</p>
					

					
				</span>

				<div>

					<!-- listado de publicaciones -->
					<?php if(isset($contenido_listado)){include( $contenido_listado );} ?>
				

				</div>

			</div>

			<div class="col-md-2">
				<!-- side right -->
				<?php 
				if ( !isset($_SESSION["usuario"]) ){ ?>

					<div class="d-flex flex-column mt-5">

						<div class="mt-4 mb-2">					    
			   				<a href="#" class="mx-4" name="favoritos">Favoritos</a>
			   			</div>

			   			<div  class="mt-4 mb-2">
							<a href="#" class="mx-4" name="favoritos">Comentarios</a>
						</div>

						<div  class="mt-4 mb-2">
							<a href="index.php?m=pubs&a=new" class="mx-4" name="publicar">Publicar</a>
						</div>

						<div  class="mt-4 mb-2">
							<a href="index.php?m=pubs&a=list" class="mx-4" name="publicar">Mis salones</a>
						</div>

					</div>

				<?php } ?>
				
				<?php 
				if ( isset($_SESSION["usuario"]) ){ ?>

					<div class="d-flex flex-column mt-5">

						<div class="mt-4 mb-2">					    
			   				<a href="#" class="mx-4" name="favoritos">Favoritos</a>
			   			</div>

			   			<div  class="mt-4 mb-2">
							<a href="#" class="mx-4" name="favoritos">Comentarios</a>
						</div>

						<div  class="mt-4 mb-2">
							<a href="index.php?m=pubs&a=new" class="mx-4" name="publicar">Publicar</a>
						</div>

						<div  class="mt-4 mb-2">
							<a href="index.php?m=pubs&a=list" class="mx-4" name="publicar">Mis salones</a>
						</div>

					</div>

			<?php } ?>

			</div>

			</div>

</section>