<?php

include("../config/conexion.php");

if (isset($_POST['register'])) {

	if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {

		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		//$passCifrada = password_hash($password, PASSWORD_DEFAULT);

		//aca hacemos la consulta para ver si encontramos el correo en la base
		$buscarCorreo = "SELECT * from users WHERE email='$email'";
		$fechareg = date("d/m/y");
		$aux='2';
		$rol=(int)'2';
		$consulta = "INSERT INTO users(name, email, password, register_date, id_rolFK ) VALUES ('$name','$email','$password','$fechareg','$rol')";
		//Realizamos la consulta y anadimos $connection, ya que es la variable que creamos en nuestro archivo connection.php
        $validacion = mysqli_query($conexion, $buscarCorreo);
        //Usaremos la funcion mysqli_num_rows en la consulta $resultado,
        //esta funcion nos regresa el numero de filas en el resultado
        $contador = mysqli_num_rows($validacion);

		//aca controlamos si el valor es >=1 significa que ya existe, si no es asi
		//registramos el usuario
		if($contador >= 1) {

?>
<h3 class="bad">¡El correo ya existe!</h3>
<?php
        }
		else {
			$resultado = mysqli_query($conexion, $consulta);
			if ($resultado) {
				?>
					<h3 class="ok">¡Te has inscripto correctamente!</h3>
				<?php
				} else {
				?>
					<h3 class="bad">¡Ups ha ocurrido un error!</h3>
				<?php
				}
			}
		} else {
		?>
		<h3 class="bad">¡Por favor complete los campos!</h3>
		<?php
	}
}

?>
