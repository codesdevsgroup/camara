<?php

//Credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'u464363209_cm');
define('PASS', 'Materlandia20');
define('DBNAME', 'u464363209_cm');

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);