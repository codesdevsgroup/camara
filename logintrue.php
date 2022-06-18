<?php
include ("./conexao.php");

if(!isset($_SESSION)) {
	session_start();
}
print_r($_SESSION);

if(isset($_POST['user']) || isset($_POST['pass'])) {

	if(strlen($_POST['user']) == 0){
		header('Location: login.php?login=erro');

	} else if(strlen($_POST['pass']) == 0) {
		header('Location: login.php?login=erro');
	} else {
		$user = $mysqli->real_escape_string($_POST['user']);
		$pass = $mysqli->real_escape_string($_POST['pass']);

		$sql_code = "SELECT * FROM tb_usuario WHERE nomeUsuario = '$user' LIMIT 1";
		$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

		$quantity = $sql_query->num_rows;

		if ($quantity == 1) {
			$userdata = $sql_query->fetch_assoc();
				if(password_verify($pass, $userdata['senhaUsuario'])) {
					if(!isset($_SESSION)) {
						session_start();
					}
					$_SESSION['id'] = $userdata['idUsuario'];
					$_SESSION['user'] = $userdata['nomeUsuario'];
					$_SESSION['authy'] = 'yes';

					header("Location: controlpanel.php");
				} else {
					$_SESSION['authy'] == 'no';
    			header('Location: login.php?login=erro');
				}
		} else {
			$_SESSION['authy'] == 'no';
    	header('Location: login.php?login=erro');
		}
	}
}

/* 
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
*/
?>