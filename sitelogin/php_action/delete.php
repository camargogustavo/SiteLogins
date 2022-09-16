<?php

session_start();

require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):

    $id = mysqli_escape_string($connet, $_POST['id']);

    $sql = "DELET FROM usuario WHERE id = '$id'";

    if(mysqli_query($connet, $slq)):
        $_SESSION['mensagem'] = "Deletado com sucesso";
        header('Locantion: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao deletar";
        header('Locantion: ../index.php');
    endif;
endif;

?>