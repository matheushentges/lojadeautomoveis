<html>
<style>
    h1 {text-align: center;}
    p {text-align: center;}
    div {text-align: center;}
    
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Sucesso!</h4>
  <p>Veículo cadastrado no estoque.</p>

<a href="/lojacarro/"><button class="btn btn-primary" type="button">Voltar para ínicio</button></a>
<a href="/lojacarro/app/car/new.php"><button class="btn btn-success" type="button">Cadastrar novo veículo</button></a>
<a href="/lojacarro/app/car/list.php"><button class="btn btn-secondary" type="button">Consultar estoque</button></a>
</div>

</html>


<?php

$dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/lojacarro/';
require $dirProjeto . 'classes/db/MySQL.php';

$MySQL = new MySQL();
$DB = $MySQL->connectDB();

$marca = addslashes($_POST['marca']);
$modelo = addslashes($_POST['modelo']);
$ano = addslashes($_POST['ano']);
$valor = addslashes($_POST['valor']);
$obs = addslashes($_POST['obs']);

$DB->query("INSERT INTO carros (marca, modelo, ano, valor, obs)
            VALUES ('$marca', '$modelo', '$ano', '$valor', '$obs')");
