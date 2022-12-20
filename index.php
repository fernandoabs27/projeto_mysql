<?php
require_once 'cabecalho.php';
?>

<div id="exibe"></div>

<form action="index.php">
    <div class="container-busca">
        <input type="search" name="busca" id="busca">
        <button type="submit" id="btn-busca">
            <span class="material-symbols-outlined">search</span>
        </button>
    </div>
</form>

<div class="container-tabela">
    <table>
        <tr>
            <th>ID</th>
            <th>
                <div class="icone-titulo">
                    <span class="material-symbols-outlined">badge</span>
                    Nome
                </div>
            </th>
            <th>
                <div class="icone-titulo">
                    <span class="material-symbols-outlined">mail</span>
                    Email
                </div>

            </th>
            <th>
                <div class="icone-titulo">
                    <span class="material-symbols-outlined">today</span>
                    Data de Criacao
                </div>
            </th>
            <th colspan="2">
                <a href="criar.php">
                    <span class="material-symbols-outlined icone-verde">group_add</span>
                </a>
            </th>
        </tr>
        <?php foreach ($lista as $pessoa) : ?>
            <tr>
                <td> <?= $pessoa['id_pessoa'] ?> </td>
                <td> <?= $pessoa['nome'] ?> </td>
                <td> <?= $pessoa['email'] ?> </td>
                <td> <?= $pessoa['data_registro'] ?> </td>
                <td>
                    <a href="editar.php?id_pessoa=<?= $pessoa['id_pessoa'] ?>">
                        <span class="material-symbols-outlined icone-azul">edit</span>
                    </a>
                </td>
                <td>
                    <a href="deletar.php?id_pessoa=<?= $pessoa['id_pessoa'] ?>">
                        <span class="material-symbols-outlined icone-vermelho">delete</span>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>

<?php
require_once 'rodape.php';
?>