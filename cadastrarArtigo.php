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