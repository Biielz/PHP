<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Bancário em PHP</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            echo "<h3>Controle bancário em PHP</h3>";
            $Nome_Banco = ""; // Armazena nome do banco
            $TipoDeConta = ""; // Armazena o tipo de conta
            $Nome_Correntista = $_POST["nome"];
            echo "<strong>Nome do correntista: </strong>" . $Nome_Correntista;
            $Banco = $_POST["banco"];
            
            //Exibindo o nome completo do banco
            if($Banco == "caixa") // se for o banco selecionado
                $Nome_Banco = "Caixa Economômica Federal"; // armazena o completo do banco
            else if($Banco == "santander")
                $Nome_Banco = "Banco Santander";
            else if($Banco == "mercantil")
                $Nome_Banco = "Banco Mercantil";
            else if($Banco == "brasil")
                $Nome_Banco = "Banco do Brasil";
            else if($Banco == "bradesco")
                $Nome_Banco = "Banco Bradesco";
            else
                $Nome_Banco = "Você não escolheu o banco!";
            echo "<br><strong>Nome do banco: </strong>" . $Nome_Banco; // exibe nome completo do banco
        }
        
        else {
            echo "Atenção, você tem que cadastrar os seus dados primeiro!";
            echo "<p><a href=banco_cc.html>Cadastro da conta corrente</a></p>";
        }
    ?>
</body>
</html>