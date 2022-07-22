<?php

  if(!isset($_SESSION)) {
    session_start();
  }
  require_once ("../../conexao.php");
  if ($_SESSION['authy'] != 'yes') {
    header("Location: killsess.php");
  }
  print_r($_SESSION);
  ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Painel de Controle</title>
  <!-- web fonts -->
  <!-- web fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
  <!-- //web fonts -->
  <!-- //web fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link rel="stylesheet" href="style.css">
  <style>
    .caixa {
      width: 100%;
      margin: 5px;
      height: auto;
      padding: 3px;
      border-radius: 5px;
      border: 1px solid black;
    }

    .links {
      width: auto;
      padding: 5px;
    }

  </style>
</head>

<body>
  <!-- Top Menu 1 -->

  <section class="w3l-about-breadcrum">
    <div class="breadcrum-bg">
      <div class="container py-5">
        <p>Bem vindo <?= $_SESSION['user'] ?></p>
      </div>
        <p>
        <a href="./killsess.php?logout">Sair</a>  
        </p>
    </div>
  </section>
  <!-- content-with-photo4 block -->

  <!--/team-sec-->
  <section class="w3l-team-main">
    <div class="team py-5">
      <div class="container py-lg-5">
        <div class="heading text-center mx-auto">
          <h3 class="head">Painel de Controle</h3>
          <p class="my-3 head"> Espaço para administração do ambiente virtual da Câmara Municipal de Materlândia - MG.</p>
        </div>
        <div class="row team-row pt-3 mt-5">
          <div class="tudo">
              <a href="cadastraartigo.php" target="painel">
                <div class="btn">Cadastro de Notícias</div>
              </a>
            </div>
            <div class="paineldados">
              <iframe name="painel" width="100%" height="600px"></iframe>
            </div>
          </div>
          <!-- end team member -->
        </div>
      </div>
  </section>
  <!--//team-sec-->
<?php require_once 'footer.php'; ?>