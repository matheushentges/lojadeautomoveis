<?php

  include 'classes/session/Session.php';
  Session::validSessionLogin();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="https://images.vexels.com/media/users/3/156343/isolated/preview/5a66de1481e577294f27e683a569bc42-iacute-cone-de-cadeado-simples-by-vexels.png">

    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="app/login/login.php">
      <img class="mb-4" src="https://images.vexels.com/media/users/3/156343/isolated/preview/5a66de1481e577294f27e683a569bc42-iacute-cone-de-cadeado-simples-by-vexels.png" >
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      <label for="inputEmail" class="sr-only">Endereço de email</label>
      <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" name="pass" class="form-control" placeholder="Senha" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <br>
      <?php
      if ($_GET['erro_login'] == true){
          echo '<div class="alert alert-danger" role="alert">Credenciais inválidas, tente novamente.</div> 
          ';
      } 
      if ($_GET['logout'] == true){
        echo '<div class="alert alert-warning" role="alert">Sessão finalizada.</div> 
        ';
      }
      if ($_GET['permissao'] == "false"){
        echo '<div class="alert alert-danger" role="alert">Ops! <br>Você não tem permissão para acessar essa página!</div> 
        ';
      }  
      ?>
      <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
  </body>
</html>
