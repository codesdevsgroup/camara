<?php

session_start();
include_once './conexao.php';
//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$SendCadImg = filter_input(INPUT_POST, 'SendCadImg', FILTER_SANITIZE_STRING);
if ($SendCadImg) {
    //Receber os dados do formulário
    $idProcesso = filter_input(INPUT_POST, 'processo', FILTER_SANITIZE_STRING);
    $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
	$descricao = filter_input(INPUT_POST, 'desc', FILTER_SANITIZE_STRING);
    $usuario = '1';
    $nome_imagem = $_FILES['imagem']['name'];
    $ext = pathinfo($nome_imagem, PATHINFO_EXTENSION);
    $nomeImagem = 'CMM'.$tipo.date('dmYHis');
    //var_dump($_FILES['imagem']);
    //Inserir no BD
    $nomeFinal = $nomeImagem.'.'.$ext;
	$result = "INSERT INTO tb_anexo_processo (descricaoAnexo, arquivoAnexo, tipoAnexo, idProcesso, idUsuario) VALUES (:descricao,:arquivo,:tipo, :processo,:usuario)";
    $insert_msg = $conn->prepare($result);
    $insert_msg->bindParam(':descricao', $descricao);
    $insert_msg->bindParam(':arquivo', $nomeFinal);
    $insert_msg->bindParam(':tipo', $tipo);
    $insert_msg->bindParam(':processo', $idProcesso);
    $insert_msg->bindParam(':usuario', $usuario);

    //Verificar se os dados foram inseridos com sucesso
    if ($insert_msg->execute()) {
        //Recuperar último ID inserido no banco de dados
        $ultimo_id = $conn->lastInsertId();

        //Diretório onde o arquivo vai ser salvo
        $diretorio = 'dados/anexosProcesso/';

        //Criar a pasta de foto
        if(move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$nomeFinal)){
            $_SESSION['msg'] = "<p style='color:green;'>Dados salvo com sucesso e upload da imagem realizado com sucesso</p>";
            header("Location: uploaddoc.php");
        }else{
            $_SESSION['msg'] = "<p><span style='color:green;'>Dados salvo com sucesso. </span><span style='color:red;'>Erro ao realizar o upload da imagem</span></p>";
            header("Location: uploaddoc.php");
        }        
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
        header("Location: uploaddoc.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
    header("Location: uploaddoc.php");
}