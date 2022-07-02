<?php
session_start();
include_once ("../../conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>CÂMARA DE MATERLÂNDIA - UPLOAD</title>
		<link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Cadastro de Anexos</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form method="POST" action="cadastraranexos.php" enctype="multipart/form-data">
            <label>Selecione o Processo:</label><br>
			<div class="styled-select">
			<select name="processo">
            <?php
				$resultado = $conn->query("SELECT c.idProcesso, m.nomeModalidade, c.numeroModalidade, c.anoProcesso, c.objetoProcesso FROM tb_compras c INNER JOIN tb_modalidades m on m.idModalidade=c.idModalidade ORDER BY c.idProcesso desc");
				foreach ($resultado as $row) {
					printf('<option value="%s">%s:%s/%s - %s</option>',$row[0], $row[1],$row[2],$row[3],$row[4]);
					}
				
			?>
			</select></div><br>
			<label>Selecione o tipo de Anexo:</label><br>
			<div class="styled-select">
				<select name="tipo">
					<?php
					$resultado = $conn->query("SELECT idTipo, nomeTipo FROM tb_tipoanexo");
			foreach ($resultado as $row) {
				printf('<option value="%s">%s</option>',$row[0], $row[1]);
			}

			?>
				</select></div>
			
			
            <label>Documento a ser Anexado:</label>
            <input type="file" name="imagem">
			
			<label>Descrição do Documento:</label>
			<input type="text" name="desc">
        
<br><br>
            
            <input name="SendCadImg" type="submit" value="Cadastrar">
        </form>
    </body>
</html>
