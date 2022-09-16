<?php

session_start();
require_once 'db_connect.php';

function clear ($input){
    global $connet;

    $var = mysqli_escape_string($connet, $input);

    $var = htmlspecialchars($var);
    return $var; 
}

if(isset($_POST['btn-cadastrar'])):
    $nome = clear($_POST['nome']);
    $login = clear ($_POST['login']);
    $email = clear ($_POST['email']);
    $senha = clear ($_POST['senha']);
    

    $slq = "INSERT INTO usuario (nome, login, email, senha) VALUES ('$nome', '$login', '$email', '$senha')";

    if(mysqli_query($connet, $slq)):
        $_SESSION['mensagem'] = "Cadastro realizado com sucesso";
        header('Locantion: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao fazer seu cadastro!!";
        header('Locantion: ../index.php');
    endif;
endif;

?>