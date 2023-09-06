<?php
require_once '../vendor/autoload.php';

$login = new inventarios\login;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];


    $resultado = $login->login($usuario, $contraseña);

    if ($resultado) {
        // La autenticación fue exitosa
        header('Location: ../dashboard/home.php');
        exit();
    } else {
        // La autenticación falló, muestra un mensaje de error.
        echo 'Usuario o contraseña incorrectos.';
    }
}



?>

