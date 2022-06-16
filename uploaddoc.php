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
        <h1>Cadastro de Produção Legislativa</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form method="POST" action="realizarupload.php" enctype="multipart/form-data">
            <label>Descrição do Arquivo:</label><br>
            <input type="text" name="nome" placeholder="Digite a Descrição do arquivo">
            
            <label>Documento a ser Anexado:</label>
            <input type="file" name="imagem"><br><br>
			
            <label>Tipo de Documento:</label>
			<div class="styled-select">
            <select name="tipo">
              <option value="3">PRODUÇÃO</option>
              <option value="4">OUTROS</option>
            </select></div><br>

            <label>Data de Referência:</label><br>
            <input type="date" name="referencia"><br><br>

<br><br>
            
            <input name="SendCadImg" type="submit" value="Cadastrar">
        </form>
    </body>
</html>
