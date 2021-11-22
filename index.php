<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <video class="background" src="resources/video/Chip - 84086.mp4" muted autoplay loop></video>

    <div class="webContainer">

        <div class="web">

            <header class="web_header">

                <h1 class="web_header_title">Blog Laboratorio IV</h1>

                <nav class="web_header_nav">

                    <ul class="web_header_nav_ul">
                        <li>
                            <a class="normalBtn normalBtn-ratio-v-4 btn-bg-initial-v-primary btn-bg-hover-v-light normalBtn-size-v-s normalBtn-text-color-hover-v-dark btn-border-radius-v-xs" href="pages/signin.php">Registrarse</a>
                        </li>
                        <li>
                            <a class="normalBtn normalBtn-ratio-v-4 btn-bg-initial-v-primary btn-bg-hover-v-light normalBtn-size-v-s normalBtn-text-color-hover-v-dark btn-border-radius-v-xs" href="pages/login.php">Login</a>
                        </li>
                    </ul>
                </nav>

            </header>

            <div class="web_content">

            <?php
            include("functions/mostrar_post.php");
            ?>

            </div>

            <aside class="web_aside">



            </aside>

            <footer class="web_footer">

                <p class="web_footer_copyright">Olfer System &copy; Todos los derechos reservados</p>

            </footer>

        </div>

    </div>

    <script src="js/buttons.js"></script>
    <script src="js/normalInput.js"></script>

</body>
</html>
