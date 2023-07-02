<?php
include 'functions.php';
$token = curl(BASEURL.'/ws/login',$_POST);

if (!empty($token)) {

    session_start();
    $_SESSION["token"] = $token;
    $_SESSION['login_time'] = time();

    header("Location: buscador.php");
} else {

    echo "El usuario o la contraseña son incorrectos";
}

