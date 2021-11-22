<?php

session_start();

if (!isset($_SESSION['rol'])) {
    header('location: login.php');
} else {
    if ($_SESSION['rol'] != 1) {
        header('location: login.php');
    }
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../style/style.css">

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({

            selector: "#contenido",
            height: 300,
            width: 600,
            statusbar: false,
            menubar: false,
            language: "es",
            plugins: [
                "advlist autolink autosave link image lists charmap preview hr anchor spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons template textcolor paste textcolor colorpicker textpattern"
            ],
            toolbar1: "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | cut copy paste | bullist numlist | outdent indent | undo redo | link unlink image media | preview | forecolor backcolor | formatselect",
            toolbar3: "subscript superscript | emoticons",
            toolbar_items_size: 'small',
            content_css: [
                '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                '//www.tinymce.com/css/codepen.min.css'
            ]
        });
    </script>

    <title>Document</title>
</head>

<body>

    <video class="background" src="../resources/video/Chip - 84086.mp4" muted autoplay loop></video>

    <div class="container">

        <div class="card">

            <h1 class="card__title">Nuevo Post</h1>

            <form class="card__form" action="../functions/procesar_agregar_post.php" method="post" enctype="multipart/form-data">

                <div class="card__form_inputs">

                    <div class="normalInput normalInput-lbl-color-focus-v-secondary normalInput-line-color-focus-v-secondary">
                        <input class="normalInput__box" type="text" name="titulo" required>
                        <label class="normalInput__lbl" for="titulo">Título</label>
                    </div>

                    <textarea name="descripcion" id="descripcion" placeholder="Descripcion del Post"></textarea>

                    <label for="imagen">Subir Imagen</label>
                    <input type="file" name="imagen" id="imagen">

                    <label for="">Categorias</label>
                    <select name="categoria" id="">
                        <optgroup label="Categorias">
                            <option value="Programacion">Programacion</option>
                            <option value="Otra">Otra</option>
                        </optgroup>
                    </select>

                    <label for="">Contenido completo del Post</label>
                    <textarea name="contenido" id="contenido"></textarea>

                </div>

                <button class="normalBtn normalBtn-ratio-v-4 btn-bg-initial-v-primary btn-bg-hover-v-light normalBtn-size-v-s normalBtn-text-color-hover-v-dark btn-border-radius-v-xs" type="submit" id="agregar" name="agregar">Subir Post</button>

            </form>

            <?php
            include("../functions/procesar_agregar_post.php");
            ?>

        </div>

    </div>

    <script src="../js/buttons.js"></script>
    <script src="../js/normalInput.js"></script>

</body>

</html>