<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['senha']);
header('Loation: login.php');
?>