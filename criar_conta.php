<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>Cadastro de Login</h3>
        <form name="login" method="post" action="">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" maxlength="40" require>
            </div>
            <div class="form_group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" maxlength="20" required>
            </div>
            <input type="submit" value="Cadastrar" nome="cadastrar">
        </form>
    </div>
    <?php
        if(isset($_POST["cadastrar"]))
        {
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];
            require "conexao.php"; // importa o arquivo de conexão com
            // o banco de dados
            $sql="INSERT INTO tblogin(codigo, usuario, senha";
            $sql="VALUES (null, '$usuario', '$senha')";
            mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            echo "Login inserido com sucesso!";
        }
    ?>
</body>
</html>