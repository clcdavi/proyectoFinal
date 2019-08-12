<?php

include_once( PATH_DAOS . "/publicacionesDAO.php");

$registros = buscarPublicacion( $_REQUEST["id"] );

$publicacion = mysqli_fetch_assoc($registros);

?>

<div class="container">
    <div class="row">
        <div class="card">
            <img class="img-fluid border border-warning" alt="" src="<?=FILES . "/imagenes/publicaciones/" . $publicacion["sal_imagen"]?>" />
            
            <p class="img-fluid">
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