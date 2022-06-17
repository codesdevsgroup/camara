
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Câmara Municipal de Materlândia - MG</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
<body>
<?php
			require_once('./conexao.php');
			require_once('./function.php');
	  
		 ?>

<section class="w3l-top-menu-1">
	<div class="top-hd">
		<div class="container">
	  <header class="row top-menu-top">
		  <div class="accounts col-md-9 col-6">
				<li class="top_li"><span class="fa fa-phone"></span><a href="tel:+55 33 3424-1170">+55 33 3427-1170</a> </li>
				<li class="top_li1"><span class="fa fa-envelope-o"></span> <a href="mailto:contato@materlandia.mg.leg.br" class="mail"> contato@materlandia.mg.leg.br</a>	</li>
				<li class="top_li"><a href="https://webmail.hostinger.com.br/auth">Servidor de E-mail</a> </li>
		  </div>
    </header>
    </div>
  </div>
</section>
<!-- //Top Menu 1 -->
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mt-2">
          <li class="nav-item">
            <a class="btn" href="index.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="vereadores.php">Vereadores</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="regimento.php">Regimento</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="ouvidoria.php">Ouvidoria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.php">Contato</a>
          </li>
        </ul>

        <?php cab();?>
        
      </div>
    </div>
  </nav>