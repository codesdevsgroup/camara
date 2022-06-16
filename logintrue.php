<?php
session_start();
require_once('conexao.php');
if (isset($_POST['entrar']))
{
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$sql = "SELECT COUNT(idUsuario) FROM tb_usuario WHERE nomeUsuario='".$user."' and senhaUsuario='".$pass."'";
	$true = 0;
	$resultado = $conn->query($sql);
	foreach ($resultado as $linhas)
	{
		$true = $linhas[0];
	}
	
	if ($true==1)
	{
		$_SESSION['block'] = 0;
		$_SESSION['logado'] = $user;
		header("Location: controlpanel.php");
	}
	else
	{
		$_SESSION['block'] = 1;
		$_SESSION['logado'] = 'Entrar';
		$_SESSION['errologin'] = "<p><span style='color:red;'>Usuário ou senha incorretos. </span></p>";
		header("Location: login.php");
	}
}
else
{
	$_SESSION['errodireto'] = "<p><span style='color:red;'>Para acessar esta área, é necessário fazer login. </span></p>";
	header("Location: login.php");
}
?>