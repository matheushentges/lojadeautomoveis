<?php

include '../../classes/session/Session.php';
Session::validSession(true);
?>

<!DOCTYPE html>
<html lang="PTBR">
<head>
    <style>
    .hidetext { -webkit-text-security: disc; /* Default */ }
    </style>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Visualizar usuários</title>

</head>
<body>
<div class="container">
    <br>
    <h1>Usuários cadastrados</a>
    <br>
    </h1>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
                <th scope="col">Ações</th>

            </tr>
        </thead>
        <tbody>
            <?php
                include 'action/select.php';
                if ($usuarios) {
                    foreach ($usuarios as $usuario) {
                        echo '<tr>';
                            echo '<td>' . $usuario['id'] . '</td>';
                            echo '<td>' . $usuario['email'] . '</td>';
                            echo '<td class="hidetext">' . $usuario['senha'] . '</td>';
                            echo '<td><a href="change.php?id=' . $usuario['id'] .  '"><button type="button" class="btn btn-warning btn-sm">Editar</button></a></td>';
                            echo '<td><a href="action/delete.php?id=' . $usuario['id'] .  '"><button type="button" class="btn btn-danger btn-sm">Deletar</button></a></td>';
                            echo '</tr>';
                        
                    }
                    
                }
            ?>
        </tbody>
    </table>
    <a href="/lojacarro/"> <button type="button" class="btn btn-primary">Inicio</button></a>
    <br>
    <br>
    <a href="new.php"> <button type="button" class="btn btn-success">Cadastrar usuário</button></a>
    <br>
    <br>
    <?php 
        if ($_GET['cadastro'] == "true"){
        echo '<div class="alert alert-success" role="alert" style="width: 25%;">Usuário alterado com sucesso!
      </div> 
        ';
        }?>


<br>
</body>
</html>


