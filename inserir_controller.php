<?php
require_once "pessoa.php";
require_once "conexao.php";

try {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $pessoa = new Pessoa();
    $pessoa->nome = $nome;
    $pessoa->email = $email;

    $pessoa->inserir();
   
   
    setcookie("msg", "Cadastrado");
    setcookie("CRIAR", true);
    header('location: index.php');
} catch (Exception $e) {
    echo $e->getMessage();
}