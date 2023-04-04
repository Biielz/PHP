<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Mensalidade</title>
</head>
<body>
    <?php
        echo "<body bgcolor = 'lavender'>";
        echo "<h3><b>Cálculo de Mensalidade</b></h3>";
        echo "<hr size='3' color='#000000' width='62%' align='left'>";
        $nome = "Gabriel Pinheiro";
        $valCurso = 1250.5;
        $ano = 2023;
        $qtdeParcelas = 4;
        
        $valMensalidade = $valCurso/$qtdeParcelas;

        echo "Nome do aluno: " . "<b><i>$nome</i></b>";
        echo "<br>Valor do curso: R$" . number_format($valCurso, 2);
        echo "<br>Ano: " . $ano;
        echo "<br>Quantidade de parcelas: " . $qtdeParcelas;
        echo "<br>Mensalidade: " . "<b><u>R$$valMensalidade</b></u>";

        echo "<hr size='3' color='#000000' width='62%' align='left'>";


        echo "<h3><u>Váriaveis usadas</u></h3>";
        echo var_dump($nome);
        echo var_dump($valCurso);
        echo var_dump($ano);
        echo var_dump($qtdeParcelas);
    ?>
</body>
</html>