<?php
session_start();

require_once 'db_connect.php';

if(isset ($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connet, $_POST['nome']);
    $email = mysqli_escape_string($connet, $_POST['login']);
    $login = mysqli_escape_string($connet, $_POST['email']);
    if($_POST['senha'] != ''):
        $senha = md5($_POST['senha']);
        $senha = ", senha = '$senha'";
    else:
        $senha = '';
    endif;

    $id = mysqli_escape_string($connet, $_POST['id']);

    $sql = "UPDATE usuario SET nome = '$nome', login = '$login', email = '$email' $senha WHERE id = '$id'";

    if(mysqli_query($connet, $slq)):
        $_SESSION['mensagem'] = "Atualizado com sucesso";
        header('Locantion: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar";
        header('Locantion: ../index.php');
    endif;
endif;
?>