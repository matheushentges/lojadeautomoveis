<?php
include '../../classes/session/Session.php';
Session::validSession(true);

$dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/lojacarro/';
require $dirProjeto . 'classes/db/MySQL.php';

$MySQL = new MySQL();
$DB = $MySQL->connectDB();

$id = addslashes($_GET['id']);

$carros = $DB->query("SELECT * FROM carros WHERE id='$id'");

foreach ($carros as $carro ) {
    $marca = $carro['marca'];
    $modelo = $carro['modelo'];
    $ano = $carro['ano'];
    $valor = $carro['valor'];
    $obs = $carro['obs'];
}
?>

<!DOCTYPE html>
<html lang="PTBR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Edição do estoque</title>
</head>
<body>
<br>
<div class="container">
    <h2>Editar Veiculo</h2>
    <form method="POST" action="action/update.php">
        <div class="form-group">
        <label for="id">Número do veículo</label>
        <div class="id" style="width:60px;">
                <input type="number" name="id" requiered class="form-control" readonly placeholder="id" value="<?php echo $id;?>">
        </div>
        <br>
        <label for="marca">Marca</label>
        <select class="form-control" requiered name="marca">
            <option value="Volkswagen"><?php echo $marca; ?></option>
            <option value="Volkswagen">Volkswagen</option>
            <option value="Nissan">Nissan</option>
            <option value="Chevrolet">Chevrolet</option>
            <option value="Subaru">Subaru</option>
        </select>
        <small class="form-text text-muted"> Selecione a marca do veículo.</small>
        <br>
        <label for="info">Informações adicionais</label>
        <div class="row">
            <div class="col">
                <input type="text" name="modelo" requiered class="form-control" placeholder="Modelo" value="<?php echo $modelo;?>">
            </div>
            <div class="col">
                <input type="number" name="ano" requiered class="form-control" placeholder="Ano" value="<?php echo $ano;?>">
            </div>
            <div class="col">
                <input type="number" name="valor" requiered class="form-control" placeholder="Valor" value="<?php echo $valor;?>">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="obs">Observação:</label>
            <textarea class="form-control" name="obs" rows="4" value="<?php echo $obs; ?>"></textarea>  
        </div>
        <button type="submmit" class="btn btn-success">Atualizar</button>
        <br>
        <br>
        <a href="/lojacarro/"> <button type="button" class="btn btn-primary">Inicio</button>
</body>
</html>


