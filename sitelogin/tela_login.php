<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/tlogin.css" rel="stylesheet">
</head>

<body>
    <a href="index.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="php_action/testlogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input type="submit" name="btn-login" value=Enviar class="inputsubmit">
        </form>
    </div>
</body>
</html>