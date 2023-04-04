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
        echo "<h2>Controle de Gastos</h2>";
        echo "<form name='controle' method='post' action='exibirGasto.php'>";
        
        echo "div>"
        echo "<h3>Receitas</h3>";
        echo "<p>";
            echo "<label for='receita1'>Receita 1:</label>";
            echo "<input type='text' name='re1' size=4 maxlength=4 required>";
        echo "</p>";

        echo "<p>";
            echo "<label for='receita2'>Receita 2:</label>";
            echo "<input type='text' name='re2' size=4 maxlength=4 required>";
        echo "</p>";

        echo "<h3>Despesas</h3>";
        echo "<p>";
             echo "<label for='despesa1'>Despesa 1:</label>";
             echo "<input type='text' name='des1' size=4 maxlength=4 required>";
        echo "</p>";

        echo "<p>";
             echo "<label for='despesa2'>Despesa 2:</label>";
             echo "<input type='text' name='des2' size=4 maxlength=4 required>";
        echo "</p>";

        echo "<p>";
             echo "<label for='despesa3'>Despesa 3:</label>";
             echo "<input type='text' name='des3' size=4 maxlength=4 required>";
        echo "</p>";

        echo "<p>";
             echo "<label for='despesa4'>Despesa 4:</label>";
             echo "<input type='text' name='des4' size=4 maxlength=4 required>";
        echo "</p>";

        echo "<p>";
             echo "<label for='despesa5'>Despesa 5:</label>";
             echo "<input type='text' name='des5' size=4 maxlength=4 required>";
        echo "</p>";

        echo "<p>";
             echo "<label for='despesa6'>Despesa 6:</label>";
             echo "<input type='text' name='des6' size=4 maxlength=4 required>";
        echo "</p>";

        echo "<p>";
            echo "<input type='submit' value='Calcular' name='Calcular'>";
        echo "</p>";
    ?>
</body>
</html>