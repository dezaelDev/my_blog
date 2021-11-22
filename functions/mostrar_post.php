<?php

include('./config/conexion.php');  // Llama a la conexion de la base

$consulta = 'SELECT * FROM post';

$resultado = mysqli_query($conexion, $consulta);

while ($registro = mysqli_fetch_array($resultado)) {

    echo '<article class="postCard">';

        echo '<div class="postCard_header">';

            echo '<h3 class="postCard_header_title">' . $registro['titulo_post'] . '</h3>';

            echo '<div class="postCard_header_user">';

                echo '<img class="postCard_header_user_icon" src="resources/images/icons8-male-user-24.png">';
                echo '<h2 class="postCard_header_user_name">' . $registro['autor_post'] . '</h2>';

            echo '</div>';

        echo '</div>';

        echo '<p class="postCard_description">' . $registro['descripcion_post'] . '</p>';
        echo '<img class="postCard_img" src="resources/images/' . $registro['imagen_post'] . '">';
        echo '<p class="postCard_content">' . $registro['contenido_completo_post'] . '</p>';
        echo '<spam class="postCard_separator"></spam>';

        echo '<div class="postCard_footer">';

            echo '<p class="postCard_footer_category">#' . $registro['categoria_post'] . '</p>';
            echo '<p class="postCard_footer_date">' . $registro['fecha_post'] . '</p>';

        echo '</div>';

    echo '</article>';
}
