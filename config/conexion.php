<?php

    //Creando conexion
    $conexion = mysqli_connect("localhost", "root", "");

    //Verificando conexion
    if(!isset($conexion)){
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Conexion Exitosa";

    //Seleccion de base de datos
    $seleccion_BD = mysqli_select_db($conexion,"blog");

    //Verificando la base
    if(!isset($seleccion_BD)){
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Conexion Exitosa";
