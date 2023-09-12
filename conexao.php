<?php
    $host = "localhost";
    $user = "root";
    $pass = ""; // usuario do XAMP deixar a senha em branco
    $banco = "bddespesas_a"; // nome do banco
    $conexao = mysqli_connect($host,$user,$pass) or die(mysqli_error($conexao));
    mysqli_select_db($conexao, $banco);
?>