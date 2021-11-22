<?php

include("../config/conexion.php");



if (isset($_POST['agregar'])) {
    //Tomando los datos del formulario
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $categoria = $_POST["categoria"];
    $contenido = $_POST["contenido"];

    //Verificando la imagen subida
    $nombre_imagen = basename($_FILES["imagen"]["name"]);
    $nombre_temporal = $_FILES["imagen"]["tmp_name"];
    $tipo_archivo = $_FILES["imagen"]["type"];
    $destino = "../resource/images" . $nombre_imagen;

    //Tomando datos del usuario que postea
    $autor_post = (string)($_SESSION['autor']);
    $user = $_SESSION['user'];




    if ($tipo_archivo == "image/jpeg" || $tipo_archivo == "image/jpg" || $tipo_archivo == "image/png" || $tipo_archivo == "image/gif") {
        move_uploaded_file($nombre_temporal, $destino);
        echo "La imagen se subio con exito";
    } else {
        echo "El archivo subido no es una imagen. </br>";
        exit();
        echo "<a href='agregar_post.php'>Volver Atras</a>";
    }


    $consulta = "INSERT INTO post(autor_post, fecha_post, categoria_post, titulo_post, imagen_post, descripcion_post, contenido_completo_post, id_userFK) VALUES ('$autor_post', NOW(), '$categoria', '$titulo', '$nombre_imagen', '$descripcion', '$contenido', '$user')";

    $resultado = mysqli_query($conexion, $consulta);

    if (!isset($resultado)) {
        echo "Error al insertar los datos en la tabla";
        exit();
    } else {
        header("Location: ../index.php?created");
    }
}
