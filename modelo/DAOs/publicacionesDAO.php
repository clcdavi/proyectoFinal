<?php

    include_once PATH_HELPERS . '/database_helper.php';

	function buscarPublicaciones($busqueda, $id_categoria){

        $conexion = getConexion();

        $consulta = "SELECT sal_id, sal_nombre, SUBSTRING(sal_descripcion, 1, 100) AS sal_descripcion, sal_cat, sal_id_usuario, sal_imagen " . 
                  "FROM salones ";

        if ( $busqueda != "" ){

           $consulta .= " WHERE (sal_nombre LIKE '%" . $busqueda . "%' OR sal_descripcion LIKE '%" . $busqueda . "%')";
        }


        if  ($id_categoria != -1) {

            if ( $busqueda != "" ){

                $consulta .= " AND ";
            }
            else{
                $consulta .= " WHERE ";   
            }


            $consulta .= " sal_cat = $id_categoria"; 

        }
 
        $consulta .= " ORDER BY sal_nombre  ASC";

        $resultado = $conexion->query( $consulta );


        return $resultado;
	}

    function buscarPublicacion( $id_publicacion ){
        $conexion = getConexion();

        $consulta = "SELECT * " . 
                  "FROM salones " . 
                  "WHERE sal_id = " . $id_publicacion;

        $resultado = $conexion->query( $consulta );

        return $resultado;
    }

    function buscarPublicacionesUsuario( $id_usuario ){
        $conexion = getConexion();

        $consulta = "SELECT sal_id, sal_nombre, SUBSTRING(sal_descripcion, 1, 100) AS sal_descripcion, sal_cat, sal_id_usuario, sal_imagen " . 
                  "FROM salones " . 
                  "WHERE sal_id_usuario = " . $id_usuario;



        $resultado = $conexion->query( $consulta );

        return $resultado;
    }

    function buscarPublicacionesFavoritasUsuario( $id_usuario ){

        $conexion = getConexion();

        $consulta = "SELECT sal_id, sal_nombre, SUBSTRING(sal_descripcion, 1, 100) AS sal_descripcion, sal_cat, sal_id_usuario, sal_imagen " . 
                  "FROM salones " . 
                  "WHERE sal_id IN ( SELECT  fav_sal_id_salones  FROM favoritos_usuarios WHERE fav_sal_id_usuario = " . $id_usuario . ")";

        $resultado = $conexion->query( $consulta );

        return $resultado;

    }

    function eliminarPublicacion( $id_publicacion ){

        $conexion = getConexion();

        $sql = "DELETE FROM salones " .         
               " WHERE sal_id = " . $id_publicacion;

        $resultado = $conexion->query( $sql );

    }

    function agregarPublicacion( $publicacion ){

        $conexion = getConexion();

        $sql = "INSERT INTO salones " . 
                    "(sal_nombre, sal_descripcion, sal_cat, sal_id_usuario, sal_imagen)" 
                        . " VALUES ('" 
                        . $publicacion["titulo"] . "', '"
                        . $publicacion["descripcion"] . "', "
                        . $publicacion["id_categoria"] . ", "
                        . $publicacion["id_usuario"] . ",'"
                        . $publicacion["imagen"] . "'"

                     . ")";



        $conexion->query( $sql );

    }

    function modificarPublicacion( $publicacion ){

        $conexion = getConexion();

        $sql = "UPDATE salones SET " . 
                    "sal_nombre= \"" . $publicacion["nombre"] . "\"" .
                    ", sal_descripcion=\"" . $publicacion["descripcion"] . "\"".
                    ", sal_cat=" . $publicacion["id_categoria"] .
                    ", sal_usuario=" . $publicacion["id_usuario"] ;

        if ( $publicacion["imagen"] ){
            $sql .= ", sal_imagen=\"" . $publicacion["imagen"] . "\"";
        }
        
        $sql .= " WHERE sal_id = " . $publicacion["id"];



        $conexion->query( $sql );



    }
?>