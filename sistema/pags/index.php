<?php

include_once '../includes/footerindex.php';

?>

    <nav>
        <div class="logo">
        <h1 class="h1-title">Sistema de Login</h1>
        </div>
        <button>&#9776;</button>
        <ul>
            <li><p><a class="btn-nav" href="logins.php">Logins</a></p></li>
            <li><p>Perfil</p></li>
        </ul>
    </nav>

    <div class="index-login">
        <h1 class="h1-login">Login</h1>
        <br>
        <form action="php_action/testlogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <a href="../php_action/testlogin.php"><input type="submit" name="btn-login" value=Login class="inputsubmit"></a>
            <br>
            <a href="../adicionar.php"><input type="submit"class="btn-cadastra" value=Cadastrar-se></a>
        </form>
    </div>
<?php

include_once '../includes/footerindex.php';

?>