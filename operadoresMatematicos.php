<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3>Operadores matemáticos em PHP</h3>";
        echo "<hr size='3' color='#ff0000' width='62%' align='left'>";
        $numero1=10;
        $numero2=15;
        echo $numero1, " ";
        echo $numero2;
        echo "<h4>Efetuando a soma do $numero1 mais o $numero2 </h4>";
        $soma = $numero1 + $numero2;
        $subtracao = $numero1 - $numero2;
        $multi = $numero1 * $numero2;
        $divisao = $numero1 / $numero2;
        echo "<strong>Soma: </strong>" . $soma, " ";
        //É possível inserir tags html no php, porém essas tags deverão ficar dentro de aspas
        echo "<hr size='3' color='#ff0000' width='62%' align='left'>";
        echo "<h4>Efetuando a subtração do $numero1 mais o $numero2</h4>";
        echo "<strong>Subtração: </strong>" . $subtracao;
        echo "<h4>Efetuando a multiplicação do $numero1 mais o $numero2</h4>";
        echo "<strong>Multiplicação: </strong>" . $multi;
        echo "<h4>Efetuando a divisão do $numero1 mais o $numero2</h4>";
        echo "<strong>Divisão: </strong>" . $divisao;

        echo "<h4>Exibindo o tipo da variável</h4>";
        echo var_dump($numero1);
        echo var_dump($numero2);
    ?>
</body>
</html>