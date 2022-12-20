<?php
require_once "pessoa.php";
require_once "conexao.php";

$id_pessoa = $_GET['id_pessoa'];

try {
    $pessoa = new Pessoa($id_pessoa);
    $pessoa->deletar();


    
    setcookie("msg", "DELETADO COM SUCESSO");
    setcookie("DELETAR", true);
    header('location: index.php');
} catch (Exception $e) {
    echo $e->getMessage();
}
