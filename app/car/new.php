<?php

include '../../classes/session/Session.php';
Session::validSession(true);
?>

<!DOCTYPE html>
<html lang="PTBR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Cadastro de Veiculos</title>
</head>
<body>
<br>
<div class="container">
    <h2>Cadastrar Veiculo</h2>
    <form method="POST" action="action/save.php">
        <div class="form-group">
        <label for="marca">Marca</label>
        <select class="form-control" requiered name="marca">
            <option value="Volkswagen">Volkswagen</option>
            <option value="Nissan">Nissan</option>
            <option value="Chevrolet">Chevrolet</option>
            <option value="Subaru">Subaru</option>
        </select>
        <small class="form-text text-muted"> Selecione a marca do veículo.</small>
        <br>
        <label for="obs">Informações adicionais</label>
        <div class="row">
            <div class="col">
                <input type="text" name="modelo" requiered class="form-control" placeholder="Modelo">
            </div>
            <div class="col">
                <input type="number" name="ano" requiered class="form-control" placeholder="Ano">
            </div>
            <div class="col">
                <input type="number" name="valor" requiered class="form-control" placeholder="Valor">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="obs">Observação:</label>
            <textarea class="form-control" name="obs" rows="4"></textarea>  
        </div>
        <button type="submmit" class="btn btn-success">Cadastrar</button>
        <br>
        <br>
        <a href="/lojacarro/"> <button type="button" class="btn btn-primary">Inicio</button>
</body>
</html>


