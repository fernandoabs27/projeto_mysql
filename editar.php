<?php
require_once "pessoa.php";
require_once "conexao.php";
require_once "cabecalho.php";

try {
    $id_pessoa = $_GET['id_pessoa'];
    $pessoa = new Pessoa($id_pessoa);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<div class="container-form">
    <div class="card">
        <form action="editar_controller.php" method="POST">
            <div class="container-inputs">
                <label for="id_pessoa">ID</label>
                <input type="number" name="id_pessoa" id="id_pessoa" value="<?= $pessoa->id_pessoa ?>" readonly>

                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?= $pessoa->nome ?>">

                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?= $pessoa->email ?>">

                <div class="container-btn">
                    <button type="submit" id="btn-criar"><b>Atualizar</b></button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
require_once 'rodape.php';
?>