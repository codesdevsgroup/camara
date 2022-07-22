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
      <?php

session_start();
include_once './conexao.php';
//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$SendCadImg = filter_input(INPUT_POST, 'SendCadImg', FILTER_SANITIZE_STRING);
if ($SendCadImg) {
    //Receber os dados do formulário
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
    $materia = $_POST['materia'];
    $usuario = '1';
	$ativo = '1';
    $nome_imagem1 = $_FILES['imagem1']['name'];
	$nome_imagem2 = $_FILES['imagem2']['name'];
    $ext1 = pathinfo($nome_imagem1, PATHINFO_EXTENSION);
	$ext2 = pathinfo($nome_imagem2, PATHINFO_EXTENSION);
    $nomeImagem1 = 'CMM'.date('dmYHis').'A';
	$nomeImagem2 = 'CMM'.date('dmYHis').'B';
    //var_dump($_FILES['imagem']
    //Inserir no BD
    $nomeFinal1 = $nomeImagem1.'.'.$ext1;
	$nomeFinal2 = $nomeImagem2.'.'.$ext2;
	$result = "INSERT INTO tb_artigos (tituloArtigo, artigo, imgArtigo01, imgArtigo02, idUsuario, ativoArtigo) VALUES (:titulo, :materia, :imagem1,:imagem2, :usuario, :ativo);";
    $insert_msg = $conn->prepare($result);
    $insert_msg->bindParam(':titulo', $titulo);
    $insert_msg->bindParam(':materia', $materia);
    $insert_msg->bindParam(':imagem1', $nomeFinal1);
    $insert_msg->bindParam(':imagem2', $nomeFinal2);
    $insert_msg->bindParam(':usuario', $usuario);
	$insert_msg->bindParam(':ativo', $ativo);

    //Verificar se os dados foram inseridos com sucesso
    if ($insert_msg->execute()) {
        //Recuperar último ID inserido no banco de dados
        $ultimo_id = $conn->lastInsertId();

        //Diretório onde o arquivo vai ser salvo
        $diretorio = 'dados/imagemArtigo/';

        //Criar a pasta de foto
		
        if((move_uploaded_file($_FILES['imagem2']['tmp_name'], $diretorio.$nomeFinal2)) && (move_uploaded_file($_FILES['imagem1']['tmp_name'], $diretorio.$nomeFinal1))) {
            $_SESSION['msg'] = "<p style='color:green;'>Dados salvo com sucesso e upload da imagem realizado com sucesso</p>";
            header("Location: cadastraartigo.php");
        }else{
            $_SESSION['msg'] = "<p><span style='color:green;'>Dados salvo com sucesso. </span><span style='color:red;'>Erro ao realizar o upload da imagem</span></p>";
            header("Location: cadastraartigo.php");
        }        
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
        header("Location: cadastraartigo.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
    header("Location: cadastraartigo.php");
}


















    <div class="row pt-3 mt-5">
      <div class="tudo">
        <div class="painelmenu">
          <a href="cadastraartigo.php" target="painel">
            <div class="btn">Cadastrar Notícias</div>
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