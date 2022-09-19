<?php

session_start();
require_once 'db_connect.php';

function clear ($input){
    global $connect;

    $var = mysqli_escape_string($connect, $input);

    $var = htmlspecialchars($var);
    return $var; 
}

if(isset($_POST['btn-cadastrar'])):
    $nome = clear($_POST['nome']);
    $login = clear ($_POST['login']);
    $email = clear ($_POST['email']);
    $senha = clear ($_POST['senha']);

    $sql = "INSERT INTO usuario (nome, login, email, senha) VALUES ('$nome', '$login', '$email', '$senha')";

    $logins = "SELECT COUNT(*) FROM usuario WHERE login = '$login'";

    $emails = "SELECT COUNT(*) FROM usuario WHERE email = '$email'";

    if(empty($_POST['nome']) or empty($_POST['login']) or empty($_POST['email']) or empty($_POST['email']) or empty($_POST['senha'])):

        if(empty($_POST['nome'])):
            header('Locantion: ../adicionar.php');
        endif;
        if(empty($_POST['login'])):
            header('Locantion: ../adicionar.php');
        endif;
        if(empty($_POST['email'])):
            header('Locantion: ../adicionar.php');
        endif;
        if(empty($_POST['senha'])):
            header('Locantion: ../adicionar.php');
        endif;

        exit(0);
    endif;

    /*if(($logins > 1) or ($emails > 1)):
        if($login > 1):
            header('Locantion: ../adicionar.php');
        endif;

        if($login > 1):
            header('Locantion: ../adicionar.php');
        endif;
        exit(0);
    endif;
    */

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastro realizado com sucesso";
        header('Location: ../logins.php');
    else:
        $_SESSION['mensagem'] = "Erro ao fazer seu cadastro!!";
        header('Location: ../logins.php');
    endif;
endif;

?>