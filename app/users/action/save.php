<?php

$dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/lojacarro/';
require $dirProjeto . 'classes/db/MySQL.php';

$MySQL = new MySQL();
$DB = $MySQL->connectDB();

$email = addslashes($_POST['email']);
$senha = sha1(addslashes($_POST['senha']));
$confirmar_senha = sha1(addslashes($_POST['confirmar_senha']));

$validaEmail = $DB->query("SELECT id FROM user WHERE email='$email'");
if($validaEmail->num_rows > 0){
    header('Location: ../new.php?email_existente=true');
    exit;
}

if ($senha == $confirmar_senha){

    $DB->query("INSERT INTO user (email, senha)
    VALUES ('$email', '$senha')");
    if ($DB->affected_rows > 0){
        header ('Location: ../list.php');
    }else {
        header ('Location: ../new.php?gravar=false');
    }
}else{
    header ('Location: ../new.php?cadastro=false');
}


