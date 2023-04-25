<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yippe 2</title>
</head>
<body style=color:brown>
    <?php
        echo "<h3>Números Randômicos - Looping While</h3>";
        $numero = 0;
        for($i=0; $i<6; $i++)
        {
            $numero = rand(1,10); //comando rand, gera numeros randômicos (aleatórios)
            echo "Número " . $numero . "<br>";
            $i;
        }
        echo "<h2>Fim do looping <strong>For</strong></h2>";
    ?>
</body>
</html>