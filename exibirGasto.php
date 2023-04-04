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
        echo "<body bgcolor='lavender'> ";
        $receita1 = $_POST["re1"];
        $receita2 = $_POST["re2"];
        $despesa1 = $_POST["des1"];
        $despesa2 = $_POST["des2"];
        $despesa3 = $_POST["des3"];
        $despesa4 = $_POST["des4"];
        $despesa5 = $_POST["des5"];
        $despesa6 = $_POST["des6"];
        $totalre = $receita1 + $receita2;
        $totaldes = $despesa1 + $despesa2 + $despesa3 + $despesa4 + $despesa5 + $despesa6;

        echo "<b>Receita 1.....</b>: " .number_format($receita1, 2);
        echo "<br><b>Receita 2.....</b>: " .number_format($receita2, 2);
        echo "<br><b>Total de receitas:</b> " .number_format($totalre, 2);

        echo "<hr size='2' color='#000000' width='62%' align='left'>";
        
        echo "<b>Despesa 1:</b> " .number_format($despesa1, 2);
        echo "<br><b>Despesa 2:</b> " .number_format($despesa2, 2);
        echo "<br><b>Despesa 3:</b> " .number_format($despesa3, 2);
        echo "<br><b>Despesa 4:</b> " .number_format($despesa4, 2);
        echo "<br><b>Despesa 5:</b> " .number_format($despesa5, 2);
        echo "<br><b>Despesa 6:</b> " .number_format($despesa6, 2);
        echo "<br><b>Total de despesas:</b> " .number_format($totaldes, 2);

        if ($totalre > $totaldes) {
            echo "<br><span style='color:blue'><b>Resultado: Crédito</b></span>";
        }else {
            echo "<br><span style='color:red'><b>Resultado: Débito</b></span>";
        }
    ?>
</body>
</html>