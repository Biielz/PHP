<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yippe</title>
</head>
<body style=color:brown>
    <?php
        echo "<h3>Números Randômicos - Looping While</h3>";
        $numero = 0;
        $contador = 0;
        while($contador < 6)
        {
            $numero = rand(1,10); //comando rand, gera numeros randômicos (aleatórios)
            echo "Número " . $numero . "<br>";
            $contador++; //soma mais 1 na variável $contador e armazena nela mesmo
        }
        echo "<h2>Fim do looping <strong>While</strong></h2>";
    ?>
</body>
</html>