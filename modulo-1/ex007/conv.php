<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 03</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Conversor de Moedas V1.0</h1>
        </header>
        <main>
            <?php                 
                $valorRS = $_GET["number"] ?? "0";
                $cotacaoDolar = 5.15;
                $valorUSD = ($valorRS / $cotacaoDolar);
                $valorFormat = number_format($valorUSD, 2, '.', '');
                // 1 Dolar equivale a R$ 5,15 Real brasileiro (04/10/2023)
                              
                echo "<p>Seus R$ $valorRS equivalem a <strong>US$ $valorFormat</strong> aproximadamente</p>";
                
                echo "<p><strong>Cotação do dólar hoje: </strong> R$ $cotacaoDolar informada diretamente no código</p>";

            ?>
            <div style="display: flex; justify-content: center;">
                <a class="zz_button" href="javascript:history.go(-1)">Voltar</a>
            </div>
        </main>        
    </body>
</html>