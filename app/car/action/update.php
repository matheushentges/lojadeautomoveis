<?php

$dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/lojacarro/';
require $dirProjeto . 'classes/db/MySQL.php';

$MySQL = new MySQL();
$DB = $MySQL->connectDB();


$id = addslashes($_POST['id']);
$marca = addslashes($_POST['marca']);
$modelo = addslashes($_POST['modelo']);
$ano = addslashes($_POST['ano']);
$valor = addslashes($_POST['valor']);
$obs = addslashes($_POST['obs']);


//var_dump($id . $marca . $modelo . $ano . $valor . $obs);exit;

$DB->query("UPDATE carros SET marca = '$marca', modelo='$modelo', ano='$ano', valor='$valor', obs='$obs' WHERE id='$id'");

header('Location: ../list.php?dados_atualizados=true');
