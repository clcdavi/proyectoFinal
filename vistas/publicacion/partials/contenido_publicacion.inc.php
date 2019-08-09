<?php

include_once( PATH_DAOS . "/publicacionesDAO.php");

$registros = buscarPublicacion( $_REQUEST["id"] );

$publicacion = mysqli_fetch_assoc($registros);

?>

<div class="container">
    <div class="row">
        <div class="card mb-2">
            <img class="ml-2 img-fluid w-75 border border-warning" alt="" src="<?=FILES . "/imagenes/publicaciones/" . $publicacion["sal_imagen"]?>" />
            
            <p class="ml-5 img-fluid w-75 pt-5">
                <?=$publicacion["sal_descripcion"]?>
                
            </p>
        </div>
        <div class="col-md-3 ">
            <h2>
                <?=$publicacion["sal_nombre"]?>
            </h2>

            <button type="button" class="btn btn-primary">
                Comprar
            </button>
        </div>
    </div>
</div>