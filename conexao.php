<?php
require_once "config.php";

class Conexao {
    public static function conectar(){
        $conexao = new PDO(DB_DRIVE . ":host=" . NOME_SERVIDOR . 
        ";dbname=" . NOME_BANCO, USUARIO, SENHA);
        $conexao->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
        return $conexao;
    }
}

// "mysql:host=localhost;dbname=meu_banco", "root", ""