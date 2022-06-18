<?php print_r($_SESSION)?>

<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <title>Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-expand-sm navbar-light bg-primary">
    <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" width="80px">Câmara Materlândia</a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="logintrue.php" method="post">
                <div class="form-group">
                  <input name="user" type="user" class="form-control" placeholder="Usuário">
                </div>
                <div class="form-group">
                  <input name="pass" type="password" class="form-control" placeholder="Senha">
                </div>
                <?php 
                  if (isset($_GET['login']) && $_GET['login'] == 'erro') {
                  
                ?>
                
                <div class="text-danger">
                  Usuário ou senha inválido(s)
                </div>

                <?php } ?>

                <?php 
                  if (isset($_GET['login']) && $_GET['login'] == 'erro2') {
                  
                ?>
                
                <div class="text-danger">
                  Faça login antes de acessar as páginas protegidas
                </div>

                <?php } ?>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>