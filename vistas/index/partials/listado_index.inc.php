<?php

    include_once PATH_HELPERS . '/html_helper.php';

    include_once PATH_DAOS . '/publicacionesDAO.php';

    include_once PATH_DAOS . '/favoritosDAO.php';

    $busqueda = "";

    if ( isset($_GET["buscar"]) ){
    	$busqueda = $_GET["buscar"];
    }

    $id_categoria = -1;

    if ( isset($_GET["categoria"]) ){
    	$id_categoria = $_GET["categoria"];
    }

    if ( isset( $_GET["only_favs"]) )
	{
		$pubs = buscarPublicacionesFavoritasUsuario( $_SESSION["id_usuario"] );
	}
	else{
		$pubs = buscarPublicaciones( $busqueda, $id_categoria);	
	}
    

    $favoritos=[];

    if ( isset( $_SESSION["id_usuario"] ) ) {
    	$favoritos = buscarFavoritosUsuario($_SESSION["id_usuario"]);
    }

	if ($pubs){
		foreach ($pubs as $pub) {

			$es_favorito = in_array( $pub['pub_id'], $favoritos);

			crearHTMLCardPublicacion($pub['pub_titulo'], $pub['pub_descripcion'] . "...", $pub['pub_imagen'], "$" . $pub['pub_id'], false, $es_favorito);			   			
		}
    }	