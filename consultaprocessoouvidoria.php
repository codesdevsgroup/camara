<style>
	textarea
	{
		width: 100%;
		height: auto;
		resize: none;
	}
</style>
<?php
require_once('conexao.php');
if ($_POST['consultar'])
{
	$chave = $_POST['chave'];
	$srt = "SELECT o.idOuvidoria,o.mensagemOuvidoria, DATE_SUB(o.dataOuvidoria, INTERVAL 3 HOUR) FROM tb_ouvidoria o WHERE o.chaveOuvidoria='".$chave."'";
	$resultado2 = $conn->query($srt);
		
	foreach ($resultado2 as $row2)
	{
		printf('<H3 align="center">Acompanhamento de Processo de Ouvidoria</H3>
						<h4 align="center">Chave: %s</h4>
						<h4>Mensagem Original em %s</h4>
						<textarea readonly>%s</textarea>
						<h4>Anexo: </h4>',$chave,date("d/m/Y H:i:s", strtotime($row2[2])),$row2[1]);
		$anda = "SELECT o.mensagemAndamento, o.anexoAndamento,u.nomeUsuario, DATE_SUB(o.dataAndamento, INTERVAL 3 HOUR) FROM tb_andamentoOuvidoria o INNER JOIN tb_usuario u on u.idUsuario=o.usuarioAndamento WHERE idOuvidoria='".$row2[0]."'";
		
		$resultado3 = $conn->query($anda);
		foreach ($resultado3 as $row3)
		{
			printf('<hr><h4>%s em %s</h4>
						<textarea readonly w>%s</textarea>
						<h4>Anexo: </h4>',$row3[2],date("d/m/Y H:i:s", strtotime($row3[3])),$row3[0]);
		}
	}
}
?>
