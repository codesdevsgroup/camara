<?php

session_start();
include_once 'conexao.php';
//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$SendCadImg = filter_input(INPUT_POST, 'cado', FILTER_SANITIZE_STRING);
if ($SendCadImg) {
	//Receber os dados do formulário
	$hora = date('md1YH');
	$milis = microtime(true);
	$chave = $hora.$milis;
	$chave = str_replace('.','',$chave);
	$primeiros = substr($chave,0,7);
	$ultimos = substr($chave,-8);
	$chave = 'CMM'.$primeiros.$ultimos.'MG';
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
	$fone = filter_input(INPUT_POST, 'fone', FILTER_SANITIZE_STRING);
	$mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
	$tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
	$msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);

	$result = "INSERT INTO tb_ouvidoria (razaoOuvidoria, documentoOuvidoria, telefoneOuvidoria, mailOuvidoria, tipoOuvidoria, mensagemOuvidoria, chaveOuvidoria) VALUES (:nome,:cpf,:fone,:mail,:tipo,:msg,:chave)";
	
	$insert_msg = $conn->prepare($result);
	$insert_msg->bindParam(':nome', $nome);
	$insert_msg->bindParam(':cpf', $cpf);
	$insert_msg->bindParam(':fone', $fone);
	$insert_msg->bindParam(':mail', $mail);
	$insert_msg->bindParam(':tipo', $tipo);
	$insert_msg->bindParam(':msg', $msg);
	$insert_msg->bindParam(':chave', $chave);


	if ($insert_msg->execute()) {
		$srt = "SELECT o.razaoOuvidoria, o.documentoOuvidoria, o.telefoneOuvidoria, o.mailOuvidoria, t.nomeTipo, o.mensagemOuvidoria, DATE_SUB(o.dataOuvidoria, INTERVAL 3 HOUR),o.chaveOuvidoria FROM tb_ouvidoria o INNER JOIN tb_tipoOuvidoria t ON o.tipoOuvidoria=t.idTipo WHERE o.chaveOuvidoria='".$chave."'";
		$resultado2 = $conn->query($srt);
		
	foreach ($resultado2 as $row2)
	{
		printf('<h3 align="center">Cadastro de Processo de Ouvidoria</h3>
<h4 align="center">Comprovante</h4>
<br>Razão: %s
<br>Documento: %s
<br>Telefone: %s
<br>E-mail: %s
<br>tipo:%s
<br>Mensagem:<br> %s
<br>Data: %s


<h3 align="center">Chave:</h3>
<h3 align="center">%s</h3>

<p>Imprima este comprovante e guarde a chave única de acesso, por ela você poderá acompanhar o andamento de seu processo.',$row2[0],$row2[1],$row2[2],$row2[3],$row2[4],$row2[5],date("d/m/Y H:i:s", strtotime($row2[6])),$row2[7]);
	}
	
	} else {
		$_SESSION['msg'] = "<p style='color:red;'>Erro ao cadastrar processo. Tente novamente</p>";
		header("Location: ouvidoria.php");
	}
	} 
    //Verificar se os dados foram inseridos com sucesso
   else {
    $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
	header("Location: cadastraProcesso.php");
}