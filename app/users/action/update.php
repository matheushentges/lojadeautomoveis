<?php

$dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/lojacarro/';
require $dirProjeto . 'classes/db/MySQL.php';

$MySQL = new MySQL();
$DB = $MySQL->connectDB();


$id = addslashes($_POST['id']);
$email = addslashes($_POST['email']);
$senha = sha1(addslashes($_POST['senha']));
$confirmar_senha = sha1(addslashes($_POST['confirmar_senha']));

$validaEmail = $DB->query("SELECT id FROM user WHERE email='$email'");

if($validaEmail->num_rows > 0){
    header('Location: ../change.php?email_existente=true');
    exit;
}

if ($senha == $confirmar_senha){

    $DB->query("UPDATE user SET email='$email', senha='$senha'WHERE id='$id'");
    if ($DB->affected_rows > 0){
        header ('Location: ../list.php?cadastro=true');
    }else {
        header ('Location: ../change.php?gravar=false');
    }
}else{
    header ('Location: ../change.php?cadastro=false');
}