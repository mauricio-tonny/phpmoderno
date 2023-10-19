<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 02</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Trabalhando com números aleatórios</h1>
        </header>
        <main>
            <div>Gerando um número aleatório entre 0 e 100...</div>
            <?php 

                define("INFERIOR", 0);
                define("SUPERIOR", 100);

                $numero = rand(INFERIOR, SUPERIOR);

                echo "<br>" . "O valor gerado é: <strong>$numero</strong>" . "<br><br>";
            
            ?>

            <div style="display: flex; justify-content: center;">
                <a  class="zz_button" href="javascript:location.reload()">Gerar outro</a>
            </div>
        </main>        
    </body>
</html>