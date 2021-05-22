
<?php

  include 'classes/session/Session.php';
  Session::validSession();
?>

<!DOCTYPE html>
<html lang="PTBR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Estoque de Veiculos</title>
</head>
<body>
<div class="container py-4">
  <div>
    Seja bem vindo <?php session_start(); echo $_SESSION['email'] ?>
    <?php echo ' <br>IP de acesso ' .$_SERVER['REMOTE_ADDR'] . '<br>'?>
    <a style="text-align:left;" href="logout.php">Sair</a>
    </div>
  <br>
    <div class="p-3 mb-3 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Estoque AutoCar</h1>
        <p class="col-md-8 fs-4">Sistema de cadastro de veículos da AutoCar</p>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Cadastrar veículo</h2>
          <p>Cadastrar novo veículo no estoque.</p>
          <a href="app/car/new.php"><button class="btn btn-outline-light" type="button">Cadastrar veículo</button></a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Visualizar veículos</h2>
          <p>Visualizar, editar ou excluir veículos do estoque.</p>
          <a href="app/car/list.php"><button class="btn btn-outline-secondary" type="button">Visualizar Veiculos</button></a>
        </div>
      </div>
    </div>
    <br>
    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-info rounded-3">
          <h2>Cadastrar usuário</h2>
          <p>Cadastrar novo usuário no sistema.</p>
          <a href="app/users/new.php"><button class="btn btn-outline-light" type="button">Cadastrar usuário</button></a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-secondary text-white border rounded-3">
          <h2>Visualizar usuários</h2>
          <p>Visualizar, editar ou excluir usuários do sistema.</p>
          <a href="app/users/list.php"><button class="btn btn-outline-light" type="button">Visualizar usuários</button></a>
        </div>
      </div>
    </div>

    <footer class="pt-3 mt-4 text-muted border-top">
      &copy; 2021 
    </footer>
  </div>







</body>
</html>