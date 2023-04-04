<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3>Calcula e exibe a soma</h3>";
        $numero1 = $_POST["num1"];
        $numero2 = $_POST["num2"]; //Recupera o conteúdo digitado na caixa1, da página soma2numeros 
        echo "Número 1: " .$numero1;
        echo " <br>Número 2: " .$numero2;
    ?>
</body>
</html>