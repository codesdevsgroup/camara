<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>CÂMARA DE MATERLÂNDIA - UPLOAD</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>Cadastro de Processos</h1>
		<?php
		if (isset($_SESSION['msg'])) {
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="cadastrarprocesso.php" enctype="multipart/form-data">
			<label>Número do Processo:</label><br>
			<input type="text" name="numerop" >

			<label>Número da Modalidade:</label>
			<input type="text" name="numerom">

			<label>Modalidade:</label>
			<div class="styled-select">
				<select name="modalidade">
					<option value="1">DISPENSA</option>
					<option value="2" selected>PREGÃO</option>
					<option value="3">ADESAO SRP</option>
				</select></div><br>

			<label>Ano Processo:</label><br>
			<input type="text" name="ano"><br><br>
			
			<label>Objeto do Processo:</label><br>
			<input type="text" name="objeto"><br><br>
			<label>Data de Autuação:</label><br>
			<input type="date" name="dataa"><br><br>
			<label>Data de Ratificação:</label><br>
			<input type="date" name="datar"><br><br>
			<label>Situação Processo:</label>
			<div class="styled-select">
				<select name="situacao">
					<option value="1" selected>EM ANDAMENTO</option>
					<option value="2">RATIFICADO</option>
					<option value="3">CANCELADO</option>
				</select></div>

	<BR>

			<input name="SendCadImg" type="submit" value="Cadastrar">
		</form>
	</body>
</html>
