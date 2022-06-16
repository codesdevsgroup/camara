<?php

session_start();
include_once './conexao.php';
//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$SendCadImg = filter_input(INPUT_POST, 'SendCadImg', FILTER_SANITIZE_STRING);
if ($SendCadImg) {
	//Receber os dados do formulário
	$numerop = filter_input(INPUT_POST, 'numerop', FILTER_SANITIZE_STRING);
	$numerom = filter_input(INPUT_POST, 'numerom', FILTER_SANITIZE_STRING);
	$modalidade = filter_input(INPUT_POST, 'modalidade', FILTER_SANITIZE_STRING);
	$ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_STRING);
	$objeto = filter_input(INPUT_POST, 'objeto', FILTER_SANITIZE_STRING);
	$dataa = filter_input(INPUT_POST, 'dataa', FILTER_SANITIZE_STRING);
	$datar = filter_input(INPUT_POST, 'datar', FILTER_SANITIZE_STRING);
	$situacao = filter_input(INPUT_POST, 'situacao', FILTER_SANITIZE_STRING);
	$usuario = '1';

	$result = "INSERT INTO tb_compras (numeroProcesso, idModalidade, numeroModalidade, anoProcesso, objetoProcesso, dataAutuacao, dataRatificacao, situacaoProcesso, idUsuario) VALUES (:numerop,:modalidade,:numerom,:ano,:objeto,:dataa,:datar,:situacao,:usuario)";
	$insert_msg = $conn->prepare($result);
	$insert_msg->bindParam(':numerop', $numerop);
	$insert_msg->bindParam(':modalidade', $modalidade);
	$insert_msg->bindParam(':numerom', $numerom);
	$insert_msg->bindParam(':ano', $ano);
	$insert_msg->bindParam(':objeto', $objeto);
	$insert_msg->bindParam(':dataa', $dataa);
	$insert_msg->bindParam(':datar', $datar);
	$insert_msg->bindParam(':situacao', $situacao);
	$insert_msg->bindParam(':usuario', $usuario);


	if ($insert_msg->execute()) {
		//Recuperar último ID inserido no banco de dados
		$ultimo_id = $conn->lastInsertId();

		//Diretório onde o arquivo vai ser salvo
		$diretorio = 'Repositorio/';

		//Criar a pasta de foto
		if (move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$nomeFinal)) {
			$_SESSION['msg'] = "<p style='color:green;'>Dados salvo com sucesso e upload da imagem realizado com sucesso</p>";
			header("Location: cadastraProcesso.php");
		} else {
			$_SESSION['msg'] = "<p><span style='color:green;'>Dados salvo com sucesso. </span><span style='color:red;'>Erro ao realizar o upload da imagem</span></p>";
			header("Location: cadastraProcesso.php");
		}
	} else {
		$_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
		header("Location: cadastraProcesso.php");
	}
	} 
    //Verificar se os dados foram inseridos com sucesso
   else {
    $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
	header("Location: cadastraProcesso.php");
}