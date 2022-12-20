<?php
require_once 'cabecalho.php';
?>

<div class="container-form">
    <div class="card">
        <form action="inserir_controller.php" method="POST">
            <div class="container-inputs">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">

                <label for="email">Email</label>
                <input type="email" name="email" id="email">

                <div class="container-btn">
                    <button type="submit" id="btn-criar"><b>Criar</b></button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
require_once 'rodape.php';
?>