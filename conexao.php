<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'camara');
$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);
$mysqli = new mysqli(HOST, USER, PASS, DBNAME);
if($mysqli->error) {
  die("Falha ao conectar ao banco de dados: " . $mysqli->error);
};
?>