<?php

  if(!isset($_SESSION)) {
    session_start();
  }
  require_once ("../../conexao.php");
  if ($_SESSION['authy'] != 'yes') {
    header("Location: killsess.php");
  }
  ?>
<?php
	require_once('./header.php');
?>

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
    <div class="row pt-3 mt-5">
      <div class="tudo">
        <div class="painelmenu">
          <a href="cadastraartigo.php" target="painel">
            <div class="btn2">Cadastrar Notícias</div>
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
<?php require_once 'footer.php'; ?>