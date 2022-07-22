<?php 
  require_once ("../../conexao.php"); 
  if(!isset($_SESSION)) {
    session_start();
  }
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Câmara Municipal de Materlândia - MG</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
<header id="home">
  <nav class="barra_menu navbar navbar-expand-sm navbar-light sticky-top shadow">
    <div class="container">
      <button class="btn pull-right navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-target">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="menu text-center collapse navbar-collapse" id="nav-target" >
        <ul class="navbar-nav h6 ml-auto ">
          <li class="nav-item mr-2">
            <a class="nav-link" href="index.php">Início</a>
          </li>
          <li class="nav-item mr-2">
            <a class="nav-link" href="index.php">A cidade</a>
          </li>
          <li class="nav-item mr-2">
            <a class="nav-link" href="vereadores.php">Vereadores</a>
          </li>
           <li class="nav-item mr-2">
            <a class="nav-link" href="regimento.php">Regimento</a>
          </li>
          <li class="nav-item mr-2">
            <a class="nav-link" href="contato.php">Contato</a>
          </li>
        </ul>        
      </div>
    </div>
  </nav>
<header>
