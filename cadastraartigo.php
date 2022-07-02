
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
   
   <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

    </head>
    <body>
        <h1>CADASTRO DE DOCUMENTOS</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form method="POST" action="cadastrarArtigo.php" enctype="multipart/form-data">
			
			<label>Título da Notícia:</label>
			<input type="text" name="titulo">
           
           	<label>Matéria da Notícia:</label>
    		<textarea id="editor1" name="materia"></textarea>
           
            <label>Imagem Principal:</label>
            <input type="file" name="imagem1">
			
			<label>Imagem Secundária:</label>
            <input type="file" name="imagem2">
        
<br><br>
            
            <input name="SendCadImg" type="submit" value="Cadastrar">
        </form>
    </body>
</html>
<script type="text/javascript">
      window.onload = function()  {
        CKEDITOR.replace( 'editor1' );
      };
    </script>  
