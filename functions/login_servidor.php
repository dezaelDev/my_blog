<?php

include("../config/conexion.php");
session_start();

if (isset($_GET['cerrar_sesion'])) {

    session_unset();

    // destroy the session
    session_destroy();
}

if (isset($_SESSION['rol'])) {
    if ($_SESSION['rol'] != 1) {
        header('location: ../index.php');
    } else {
        header('location: ../pages/agregar_post.php');
    }
} else {
}

if (isset($_POST['email'])) {

    if (strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1) {

        $username = $_POST['email'];
        $password = $_POST['password'];

        //to prevent from mysqli injection
        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $username = mysqli_real_escape_string($conexion, $username);
        $password = mysqli_real_escape_string($conexion, $password);

        $sql = "SELECT * FROM users WHERE email = '$username' AND password = '$password'";
        $result = mysqli_query($conexion, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if ($count == 1) {

            //LEER EL ID ASIGNADO SEGÚN EL TIPO DE ROL
            $rol = $row['id_rolFK'];


            //Almacenar el id en session
            $_SESSION['rol'] = $rol;
            $_SESSION['user'] = $row['id'];
            $_SESSION['autor'] = $row['name'];

            //Almacenar el id del usuario en session_destroy

            switch ($rol) {

                    // Si el usuario es editor redirigir a:
                case 1:
                    header('location: ../pages/agregar_post.php');
                    break;

                    // Si el usuario es suscriptor redirigir a:
                case 2:
                    header('location: ../pages/suscriptor.php');
                    break;
            }
        } else {
?>
            <span class="card__textError">Usuario o contraseña incorrecto</span>
<?php
        }
    }
}

?>