<!--Listado de publicaciones -->

<div class="container">
	<div class="row card">

		<div class="d-flex flex-column">					

			<?php

			    include_once PATH_HELPERS . '/html_helper.php';

			    include_once PATH_DAOS . '/publicacionesDAO.php';

			    $pubs = buscarPublicacionesUsuario( $_SESSION["id_usuario"] );

				if ($pubs){
					foreach ($pubs as $pub) {
					crearHTMLCardPublicacion($pub['sal_nombre'], $pub['sal_descripcion'] . "...", $pub['sal_imagen'], $pub['sal_id'], true);			   			
					}
			    }	

			?>

		</div>

	</div>
</div>


<!--FIN Listado de publicaciones -->
