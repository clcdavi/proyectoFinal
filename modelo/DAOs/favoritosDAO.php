<?php

    include_once PATH_HELPERS . '/database_helper.php';

    function buscarFavoritosUsuario($idUsuario){

        $conexion = getConexion();

        $consulta = "SELECT fav_sal_id_salones " . 
                    "FROM favoritos_usuarios " .
                    "WHERE fav_sal_id_usuario=" . $idUsuario;

        $resultado = $conexion->query( $consulta );

        $array_favoritos = array();
        
        while($favorito = $resultado->fetch_assoc())
        {
            $array_favoritos[] = $favorito["fav_sal_id_salones"];
        }

        return $array_favoritos;
    }

    function agregarFavorito( $id_publicacion, $idUsuario){

        $conexion = getConexion();

        $consulta = "INSERT INTO favoritos_usuarios " . 
                    "(fav_sal_id_salones, fav_sal_id_usuario) " .
                    "VALUES (" . $id_publicacion . ", " . $idUsuario . ")";


        $resultado = $conexion->query( $consulta );

    }

    function eliminarFavorito( $id_publicacion, $idUsuario){

        $conexion = getConexion();

        $consulta = "DELETE FROM favoritos_usuarios " . 
                    "WHERE fav_sal_id_salones=" . $id_publicacion . " AND  fav_sal_id_usuario=" . $idUsuario;


        $resultado = $conexion->query( $consulta );

    }