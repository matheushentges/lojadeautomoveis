<?php

$dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/lojacarro/';
require $dirProjeto . 'classes/db/MySQL.php';

include '../../classes/session/Session.php';
Session::validSession(true);

$MySQL = new MySQL();
$DB = $MySQL->connectDB();

$id = addslashes($_GET['id']);

$usuarios = $DB->query("SELECT * FROM user WHERE id='$id'");
;

foreach ($usuarios as $usuario ) {
    $email = $usuario['email'];
    $senha = $usuario['senha'];
}

?>

<!DOCTYPE html>
<html lang="PTBR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Cadastro usuários</title>
</head>
<body>
<br>
<style>
.alert {
   width:250px;    
};
</style>
<div class="container">
    <h2>Alterar usuário</h2>
    <form method="POST" action="action/update.php">
        <br>
        <label for="id">ID do usuário</label>
        <div class="id" style="width:60px;">
                <input type="number" name="id" requiered class="form-control" readonly value="<?php echo $id;?>">
        </div>
        <br>
        <div class="row" style="width:850px;">
            <div class="col">
                <label for="email">Email</label>
                <input type="text" name="email" requiered class="form-control" placeholder="Email" value="<?php echo $email;?>">
            </div>
            <div class="col">
                <label for="senha">Senha</label>
                <input type="password" name="senha" requiered class="form-control" placeholder="Senha" value="<?php echo $senha;?>">
            </div>
            <div class="col">
                <label for="confirmar_senha">Repetir a senha</label>
                <input type="password" name="confirmar_senha" requiered class="form-control" placeholder="Confirmar Senha" value="<?php echo $senha;?>">
            </div>
        </div>
        <br>
         <br>
        <button type="submmit" class="btn btn-success">Alterar</button>
        <br>
        <br>
        <a href="/lojacarro/"> <button type="button" class="btn btn-primary">Inicio</button></a>
        <?php
              if ($_GET['cadastro'] == "false"){
                echo '<div class="alert alert-danger" role="alert" style="width: 25%;">
                Senhas não são iguais!
              </div>';
              } 
    ?>
</body>
</html>


