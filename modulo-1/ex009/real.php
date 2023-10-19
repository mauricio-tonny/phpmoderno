<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 05</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Analisador de Número Real</h1>
        </header>
        <main>
            <?php                 
                $real = $_GET["number"] ?? "0";
                
                $int = intval($real); 
                $frac = substr(strpbrk($real, '.,'), 1);
                                              
                echo "<p>Analisando o número <strong>$real</strong> informado pelo usuário:</p>";
                
                echo "<p><li>A parte inteira do número é: <strong>$int</strong></p>";
                echo "<p><li>A parte fracionária do número é: <strong>$frac</strong></p>";

            ?>
            <div style="display: flex; justify-content: center;">
                <a class="zz_button" href="javascript:history.go(-1)">Voltar</a>
            </div>
        </main>        
    </body>
</html>