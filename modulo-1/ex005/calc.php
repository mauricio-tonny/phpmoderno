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
            <h1>Resultado Final</h1>
        </header>
        <main>
            <?php                 
                $numero = $_GET["number"] ?? "0";
                $ant = ($numero - 1);
                $suc = ($numero + 1);
                // ?? operador para quando nao recebe nenhum valor a partir do PHP7+                

                echo "<p>O número escolhido foi <strong>$numero</strong></p>";
                echo "<p>O seu antecessor é $ant </p>";
                echo "<p>O seu sucesso é $suc </p>";

            ?>
            <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
        </main>        
    </body>
</html>