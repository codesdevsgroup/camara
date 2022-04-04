<?php
$servername="185.211.7.205";
$database = "u127378936_camara";
$username = "u127378936_codesdev";
$password = "tQ7a=];H*4";
// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$msqli->connect_errno) {
    echo "Falha na conexão: (".$mysqli->connect_error.") ".$mysqli->connect_error;
}
?>