<?php

class MySQL

{
    const HOST = 'host';
    const USER = 'root';
    const PASS = 'senha';
    const DATABASE = 'loja';

    public function connectDB()
    {
        return new mysqli(self::HOST, self::USER, self::PASS, self::DATABASE);
    }
    
    public function getAll($DB, $tabela){
        return $DB->query("SELECT * FROM $tabela");
    
    }

    
    public function deleteByID($DB, $tabela, $id){
        return $DB->query("DELETE FROM $tabela WHERE id= $id");
    }
}
