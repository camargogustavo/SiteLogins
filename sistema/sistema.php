<?php
session_start();
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: tela-login.php');
}
    $logado = $_SESSION['email'];

?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            color: white;
            background: linear-gradient(to right, rgb(20, 147, 220), rga(17, 54, 71));
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">sistema de login</a>
            <button class="navba-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"> </button>
        </div>
    </nav>

    <h1>Acessou o sistema</h1>
<?php

include_once 'ncludes/footer.php';

?>