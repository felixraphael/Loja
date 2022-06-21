<?php

if ((!isset($_SESSION['cpf']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['cpf']);
    unset($_SESSION['senha']);

    header('location: menu.php');
}

$logado = $_SESSION['cpf'];

?>