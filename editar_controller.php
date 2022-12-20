<?php
require_once 'pessoa.php';
require_once 'conexao.php';

$id_pessoa = $_POST['id_pessoa'];
$nome = $_POST['nome'];
$email = $_POST['email'];

try {
    $pessoa = new Pessoa($id_pessoa);
    $pessoa->nome = $nome;
    $pessoa->email = $email;

    $pessoa->atualizar();

    setcookie("msg", "Categoria Editada");
    setcookie("EDITAR", true);
    header('location: index.php');
} catch (Exception $e) {
    echo $e->getMessage();
}