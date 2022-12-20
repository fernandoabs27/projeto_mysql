<?php
/*cria uma conexao */
/*try {
    $conn = new PDO("mysql:host=$nome_servidor;", $nome_usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conexao realizada <br>";
} catch (Exception $e) {
    echo $e->getMessage();
}

/*cria um banco de dados */
/*try {
    $conn = new PDO("mysql:host=$nome_servidor;", $nome_usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "create database if not exists meu_banco";
    $conn->exec($sql);
    echo "Banco criado com sucesso <br>";
} catch (Exception $e) {
    echo $e->getMessage();
}

/*cria uma tabela */
/*try {
    $conn = new PDO("mysql:host=$nome_servidor;dbname=meu_banco", $nome_usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "create table if not exists pessoa (
        id_pessoa int not null auto_increment,
        nome varchar(50) not null,
        email varchar(50) not null,
        data_registro timestamp DEFAULT CURRENT_TIMESTAMP,
        primary key (id_pessoa)
    )";
    $conn->exec($sql);
    echo "Tabela criada com sucesso <br>";
} catch (Exception $e) {
    echo $e->getMessage();
}

/*inserindo dados*/
/*try {
    $conn = new PDO("mysql:host=$nome_servidor;dbname=meu_banco", $nome_usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "insert into pessoa (nome, email) 
    values ('maria', 'maria@email.com')";
    $conn->exec($sql);
    echo "Inserido com sucesso <br>";
} catch (Exception $e) {
    echo $e->getMessage();
}
*/
/*seleciona dados do banco*/
/*try {
    $conn = new PDO("mysql:host=$nome_servidor;dbname=meu_banco", $nome_usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select * from pessoa";
    $resultado = $conn->query($sql);
    $lista = $resultado->fetchAll();
} catch (Exception $e) {
    echo $e->getMessage();
}*/

require_once "pessoa.php";
require_once "conexao.php";

if (isset($_GET['busca'])) {
    $palavra = $_GET['busca'];
    try {
        $lista = Pessoa::listarPorNome($palavra);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else {
    try {
        $lista = Pessoa::listar();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <header>
        <div class="container-menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
            </ul>
        </div>


    </header>
    <!--main delimita semanticamente o conteudo principal-->
    <main>