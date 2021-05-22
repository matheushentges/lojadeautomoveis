<?php

include '../../classes/session/Session.php';
Session::validSession(true);
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
    <h2>Cadastrar usuário</h2>
    <form method="POST" action="action/save.php">
        <br>
        <div class="row">
            <div class="col">
                <input type="text" name="email" requiered class="form-control" placeholder="Email">
            </div>
            <div class="col">
                <input type="password" name="senha" requiered class="form-control" placeholder="Senha">
            </div>
            <div class="col">
                <input type="password" name="confirmar_senha" requiered class="form-control" placeholder="Confirmar Senha">
            </div>
        </div>
        <br>
        <?php 
        if ($_GET['cadastro'] == "false"){
        echo '<div class="alert alert-danger" role="alert">Ops! <br>As senhas não são iguais!</div> 
        ';
        }
        
        if ($_GET['gravar'] == "false"){
            echo '<div class="alert alert-danger" role="alert">Ops! <br>As senhas não são iguais!</div> 
            ';
        }
        if ($_GET['email_existente'] == true){
            echo '<div class="alert alert-danger" role="alert">Ops! <br>O email já está cadastrado!</div> 
            ';
        }?>
        <br>
        <button type="submmit" class="btn btn-success">Cadastrar</button>
        <br>
        <br>
        <a href="/lojacarro/"> <button type="button" class="btn btn-primary">Inicio</button>
</body>
</html>


