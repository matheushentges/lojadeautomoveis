<?php

class Session{

    public static function validSessionLogin(){
        session_start();
        if(!is_null($_SESSION) && $_SESSION['logado']){
            header('Location: index.php');
        }
    }

    public static function validSession($app=false){

        session_start();
        if(is_null($_SESSION) || !$_SESSION['logado']){
            if($app){
                header('Location: ../../login.php?permissao=false');
            }else{
                header('Location: login.php');
            }
        }
    }
    public static function initSession($email){
        session_start();
        $_SESSION['email']=$email;
        $_SESSION['logado']=true;
    }
}
