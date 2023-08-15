<?php
session_start();
include 'functions.php';
getCurl(BASEURL.'/ws/ac/setNegociacion/'.$_GET['id'],$_SESSION['token']);
header("Location: verDatos.php?id=".$_GET['id']);
