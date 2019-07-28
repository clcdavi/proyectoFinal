<?php

    include_once PATH_HELPERS . '/database_helper.php';

	function buscarCategorias(){

        $conexion = getConexion();

        $consulta = "SELECT * " . 
                    "FROM sal_categoria " .
                    "ORDER BY sal_cat_descripcion";

        $resultado = $conexion->query( $consulta );

        return $resultado;
	}

    function agregarCategoria( $categoria ){

        $conexion = getConexion();

        $sql = "INSERT INTO sal_categoria " . 
                    "(sal_cat_descripcion)" 
                        . " VALUES ('" 
                        . $categoria["descripcion"]
                     . "')";

        $conexion->query( $sql );

    }

    function modificarCategoria( $categoria ){

        $conexion = getConexion();

        $sql = "UPDATE sal_categoria " . 
                "SET sal_cat_descripcion = '" . $categoria["descripcion"] .
                "' WHERE sal_cat_id = " . $categoria["id"]; 
                       
        $conexion->query( $sql );

    }


    function eliminarCategoria( $categoria ){

        $conexion = getConexion();

        $sql = "DELETE FROM sal_categoria " . 
                " WHERE sal_cat_id = " . $categoria["id"]; 
                       
        $conexion->query( $sql );

    }