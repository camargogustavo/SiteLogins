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

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastro realizado com sucesso";
        header('Location: ../logins.php');
    else:
        $_SESSION['mensagem'] = "Erro ao fazer seu cadastro!!";
        header('Location: ../logins.php');
    endif;
endif;

?>