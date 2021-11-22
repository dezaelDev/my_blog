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

	<title>Inicia Sesión</title>
</head>

<body>

	<video class="background" src="../resources/video/Chip - 84086.mp4" muted autoplay loop></video>

	<div class="container">

		<div class="card">

			<h1 class="card__title">Inicia Sesión</h1>

			<form class="card__form" method="post">

				<div class="card__form_inputs">

					<div class="normalInput normalInput-lbl-color-focus-v-secondary normalInput-line-color-focus-v-secondary">
						<input class="normalInput__box" type="text" name="email" required>
						<label class="normalInput__lbl" for="email">Email</label>
					</div>

					<div class="normalInput normalInput-lbl-color-focus-v-secondary normalInput-line-color-focus-v-secondary">
						<input class="normalInput__box" type="password" name="password" required>
						<label class="normalInput__lbl" for="password">Contraseña</label>
					</div>

				</div>

				<button class="normalBtn normalBtn-ratio-v-7 btn-bg-initial-v-primary btn-bg-hover-v-light normalBtn-size-v-m normalBtn-text-color-hover-v-dark btn-border-radius-v-xs" type="submit">Entrar</button>

			</form>

			<?php
			include("../functions/login_servidor.php");
			?>

		</div>

	</div>

	<script src="../js/buttons.js"></script>
	<script src="../js/normalInput.js"></script>

</body>
</html>