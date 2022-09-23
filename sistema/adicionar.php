<?php

include_once 'includes/header.php';

?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="title-ad">Cadastrar-se</h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" id="nome" name="nome">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" id="login" name="login">
                <label for="login">Login</label>
            </div>
            <div class="input-field col s12">
                <input type="text" id="email" name="email">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="password" id="senha" name="senha">
                <label for="Senha">Senha</label>
            </div>
            <button type="submit" name="btn-cadastrar" class="btn blue">Cadastrar</button>
            <a href="logins.php" class="btn blue">Lista de Logins</a>
            <a href="pags/index.php" class="btn blue">Login</a>
        </form>
    </div>
</div>
<?php
include_once 'includes/footer.php';
?>
