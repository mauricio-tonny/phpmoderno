<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Resultado do processamento</h1>
        </header>
        <main>
            <?php 
                // var_dump($_GET);
                $nome = $_GET["nome"] ?? "sem nome";
                // ?? operador para quando nao recebe nenhum valor a partir do PHP7+
                $sobrenome = $_GET["sobrenome"] ?? "desconhecido";

                echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong> !</p>";

            ?>
            <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
        </main>        
    </body>
</html>