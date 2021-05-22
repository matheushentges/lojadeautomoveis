<?php

include '../../classes/session/Session.php';
Session::validSession(true);
?>

<!DOCTYPE html>
<html lang="PTBR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Visualizar veiculos</title>
</head>
<body>
<div class="container">
    <br>
    <h1>Veículos cadastrados</a>
    <br>
    </h1>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Ano</th>
                <th scope="col">Valor</th>
                <th scope="col">Observação</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'action/select.php';
                if ($veiculos) {
                    foreach ($veiculos as $veiculo) {
                        echo '<tr>';
                            echo '<td>' . $veiculo['id'] . '</td>';
                            echo '<td>' . $veiculo["marca"] . '</td>';
                            echo '<td>' . $veiculo["modelo"] . '</td>';
                            echo '<td>' . $veiculo["ano"] . '</td>';
                            echo '<td>' . $veiculo["valor"] . '</td>';
                            echo '<td>' . $veiculo["obs"] . '</td>';
                            echo '<td><a href="change.php?id=' . $veiculo['id'] .  '"><button type="button" class="btn btn-warning btn-sm">Editar</button></a></td>';
                            echo '<td><a href="action/delete.php?id=' . $veiculo['id'] .  '"><button type="button" class="btn btn-danger btn-sm">Deletar</button></a></td>';
                            echo '</tr>';
                        
                    }
                    
                }
            ?>
        </tbody>
    </table>
    <a href="/lojacarro/"> <button type="button" class="btn btn-primary">Inicio</button></a>
    <br>
    <br>
    <a href="new.php"> <button type="button" class="btn btn-success">Cadastrar Veiculo</button></a>
    <br>
    <br>
    <?php
              if ($_GET['dados_atualizados'] == "true"){
                echo '<div class="alert alert-success" role="alert" style="width: 25%;">
                Dados atualizados com sucesso!
              </div>';
              } 
    ?>


<br>
</body>
</html>


