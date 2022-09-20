<?php

session_start();

include_once ('db_connect.php');

if(isset($_POST['btn-login'])):
    

    if(!empty($_POST['email']) && !empty($_POST['senha'])):
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
    

        $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";

        $result = $connect->query($sql);

        if(mysqli_num_rows($result) < 1):

            unset($_SESSION['email']);
            unset($_SESSION['senha']);

            header('Location: ../tela_login.php');
        else:
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: ../sistema.php');
        endif;
        
        
    else:
        header('Location: ../tela_login.php');
    endif;
endif;
