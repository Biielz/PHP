<?php
    $host = "localhost";
    $user = "root";
    $pass = "usbw"; // usuario do XAMP deixar a senha em branco
    $banco = "despesas_biiel"; // nome do banco
    $conexao = mysqli_connect($host,$user,$pass) or die(mysqli_error($conexao));
    mysqli_slect_db($conexao, $banco);
?>