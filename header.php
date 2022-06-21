<?php 
  require_once('./conexao.php'); 
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
</head>

<body>
<header class="">
  <div class="bg-transparent py-3  align-items-center text-dark container">
    <div class="row">
    <div class="col-sm offset-1">
      <a class="col-sm d-none d-sm-block" href="index.php"><img src="assets/images/logo.png" width="100px"></a>
    </div>  
    <div class="col-sm offset-2">
      <a href="tel:+55 33 3424-1170" class="text-dark">+55 33 3427-1170</a><br>
      <a href="mailto:contato@materlandia.mg.leg.br" class="text-dark"> contato@materlandia.mg.leg.br</a>
    </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-sm navbar-light bg-primary sticky-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-target" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav-target" >
        <ul class="h5 ml-auto  navbar-nav ">
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
  </nav>
<header>