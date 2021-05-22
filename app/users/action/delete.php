<?php

$dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/lojacarro/';
require $dirProjeto . 'classes/db/MySQL.php';

$MySQL = new MySQL();
$DB = $MySQL->connectDB();

$id = addslashes($_GET['id']);
$MySQL->deleteByID($DB, 'user', $id);
header('Location: ../list.php');