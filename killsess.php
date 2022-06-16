<?php
session_start();
$_SESSION['logado']='Entrar';
$_SESSION['block'] = 1;
header("Location: index.php");

?>