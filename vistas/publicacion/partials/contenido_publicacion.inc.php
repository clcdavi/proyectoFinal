<?php

include_once( PATH_DAOS . "/publicacionesDAO.php");

$registros = buscarPublicacion( $_REQUEST["id"] );

$publicacion = mysqli_fetch_assoc($registros);

?>

<div class="container-fluid">
    <div class="row px-5 mx-5">
        <div class="col-md-6 ">
            <img class="ml-5 img-fluid w-75 border border-warning" alt="" src="<?=FILES . "/imagenes/publicaciones/" . $publicacion["sal_imagen"]?>" />
            
            <p class="ml-5 img-fluid w-75 pt-5">
                <?=$publicacion["sal_descripcion"]?>
                hola
            </p>
        </div>
        <div class="col-md-6 ">
            <h2>
                <?=$publicacion["sal_nombre"]?>
            </h2>

            <button type="button" class="btn btn-primary">
                Comprar
            </button>
        </div>
    </div>
</div>