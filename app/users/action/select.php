<?php

$dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/lojacarro/';
require $dirProjeto . 'classes/db/MySQL.php';

$MySQL = new MySQL();
$DB = $MySQL->connectDB();


$usuarios = $MySQL->getAll($DB, 'user');

