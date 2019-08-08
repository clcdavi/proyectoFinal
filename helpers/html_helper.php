<?php

function crearHTMLCardPublicacion($titulo, $descripcion, $imagen, $id_pub, $pub_usuario = false, $es_favorito = false){
?>	

        <!--card de salon (de ejemplo)-->
          <div class="card mb-2">
                  <?php
                    if ( !$pub_usuario ) {

                        if ( $es_favorito ){
                            $link = '<a class="nav-link text-right" href="index.php?m=fav';

                            if ( isset($_GET["only_favs"]) ){
                               $link .= "&only_favs";
                            }

                            
                            $link .= "&a=del&id=" . $id_pub .'">' . '<img src="' . PATH_IMAGENES . '/favorito.png' . '"></a>';

                            echo $link;
                        }
                        else{
                            echo '<a class="nav-link text-right" href="index.php?m=fav&a=add&id=' . $id_pub .'">' . '<img src="' . PATH_IMAGENES . '/no_favorito.png' . '"></a>';
                        }
                        
                        echo '<a class="nav-link" href="index.php?m=show_pub&id=' . $id_pub .'">';

                      }
                  ?>
            <div class="row m-2">
              <div class="col-md-4 mt-1">
                <img src="<?=FILES?>/imagenes/publicaciones/<?=$imagen?>" class="card-img img-thumbnail bg-danger "style="max-width: 200px;" alt="imagenSalon">
              </div>
              <div class="col-md-8">
                <div class="card-body">

                  <h5 class="card-title"><?=$titulo?></h5>
                  <p class="card-text"><?=$descripcion?></p>
                </div>
              </div>
            </div>
            <div class="card-footer p-0">
              <?php

                if ( $pub_usuario ) {
                ?>
                  <div class="row bg-light mx-1 justify-content-between">
                
                    <div class="col-4 my-1">
                        <a class="btn px-3 btn-success" href="index.php?m=pubs&a=edit&id=<?=$id_pub?>" >Editar</a>
                        <a class="btn px-3 btn-danger" href="index.php?m=pubs&a=del&id=<?=$id_pub?>" >Eliminar</a>
                    </div>

                    <div class="col-4 mt-1 d-flex justify-content-end">
                      <img src="recursos/images/logoCSF.ico" alt="icono" style="width: 38px; height:38px; margin:0px;">
                    </div>

                  </div>              
            
              <?php } ?>
              <?php 

                if (!($pub_usuario)) {
                ?>

                  <div class="d-flex border-bottom justify-content-end">
                    <img src="recursos/images/logoCSF.ico" alt="icono" style="width: 25px; height:25px; margin:0px;">
                  </div>

              <?php } ?>

            </div>
          
          </div>
<?php 

}

function getTablaHTML( $registros, $campos, $primary_key, $nombre_modulo ){

  $tablaHTML = "<table class=\"table table-hover\">";

      $tablaHTML .= "<thead><tr>";

      foreach ($campos as $campo => $label){
        $tablaHTML .= "<th>$label</th>";
      }

      $tablaHTML .= "<th>Acciones</th></tr></thead>";

  while ( $registro = $registros->fetch_assoc() ){

    $tablaHTML .= '<tr id="' . $registro[$primary_key] . '">';

    foreach ($campos as $campo => $label){

      $tablaHTML .= '<td>' . $registro[ "$campo" ] . "</td>";

    }
    
    $tablaHTML .= "<td>";

    $tablaHTML .= "<button onclick=\"mostrarEditor('modificar', " . $registro[$primary_key]  . ");\" class=\"btn btn-success btn-sm\">Editar</button>";

    $tablaHTML .= "<a role=\"button\" class=\"btn btn-danger btn-sm ml-1  \" href='index.php?m=" . $nombre_modulo . "&a=del&id=" . $registro[$primary_key] . "'>Eliminar</a>";
  }

  $tablaHTML .= "</table>";

  return $tablaHTML;

}

function getOptionsComboCategorias($incluir_cat_todas = false, $id_item_seleccionado = null){
  
    include_once PATH_DAOS . '/categoriasDAO.php';

    $categorias = buscarCategorias();

    $opcionesCombo = "";

    /*si en la variable "incluir_cat_todas" no hay nada,(osea nda seleccionado), entonces va a decir "Todas"*/
    
    if ($incluir_cat_todas){
        $opcionesCombo .= '<option value="-1">Todas</option>';
    }

    
    foreach ( $categorias as $categoria ){
        $opcionesCombo .= '<option  value="'. $categoria["sal_cat_id"] . '"';


        if ( $id_item_seleccionado != null && ($id_item_seleccionado == $categoria["sal_cat_id"]) ){
            $opcionesCombo .= 'selected="selected" ';
        }

        $opcionesCombo .= '>' . $categoria["sal_cat_descripcion"] . '</option>';
    }

    return $opcionesCombo;    

}

function getOptionsComboTiposPublicacion($incluir_opcion_todos = false, $id_item_seleccionado = null){
  
    include_once(PATH_HELPERS . "/database_helper.php");
    include_once PATH_DAOS . '/tipos_pubsDAO.php';

    $conexion = getConexion();

    $tipos_pubs = buscarTiposPublicaciones();

    $opcionesCombo = "";

    if ($incluir_opcion_todos){
        $opcionesCombo .= '<option value="-1">Todas</option>';
    }
    
    foreach ( $tipos_pubs as $tipo_pub ){
        $opcionesCombo .= '<option value="'. $tipo_pub["tp_id"] . '"';

        if( $id_item_seleccionado == $tipo_pub["tp_id"]){
            $opcionesCombo .=  ' selected="selected"';      
        }

        $opcionesCombo .= '>' . $tipo_pub["tp_descripcion"] . '</option>';
    }

    return $opcionesCombo;    

}