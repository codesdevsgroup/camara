<?php 
  require_once('../../conexao.php'); 
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
</head>

<body>
<header class="">
  <div class="align-items-center" style="background: black; text-align: center">
    <div class="container">
      <div class="">
        <a  href="index.php" class="text-white pr-3">Câmara Municipal de Materlândia - MG</a>
        <a href="tel:+55 33 3424-1170" class="text-white pr-3" style= "white-space: nowrap;">+55 33 3427-1170</a>
        <a href="mailto:contato@materlandia.mg.leg.br" class="text-white pr-3"> contato@materlandia.mg.leg.br</a>
        </div>
      </div>
    </div>
    
  <nav class=" navbar navbar-expand-sm navbar-light bg-primary sticky-top shadow">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-target">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="menu text-center collapse navbar-collapse" id="nav-target" >
        <ul class="navbar-nav h4 ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="vereadores.php">Vereadores</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="regimento.php">Regimento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.php">Contato</a>
          </li>
        </ul>        
      </div>
    </div>
  </nav>
<header>