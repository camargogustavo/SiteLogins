<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['senha']);
header('Loation: pags/index.php');
?>