<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 11 (7 do Guanabara)</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            // Capturando os dados
            $salario = $_GET['salario'] ?? 0;
            
            // Valor do salário mínimo
            $minimo = 1380.00;
        ?>
        <header>
            <h1>Informe seu salário</h1>
        </header>
        <main>            
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">                
                <label for="nome">Salário (R$)</label>
                <input type="number" name="salario" id="salario" value="<?= $salario ?>" step="0.001">                

                <p>Considerando que o salário mínimo é de <strong>R$<?= number_format($minimo, 2, ',', '.'); ?></strong></p>               

                <input type="submit" value="Calcular">
            </form>            
        </main>   
        
        <section id="resultado">
                <h2>Resultado Final</h2>                
                <?php 
                    // Calculador da quantidade
                    $divisor = $salario / $minimo;

                    // Pegar a quantidade de inteiros
                    $qtde = intval($divisor);
                    
                    // Fazer o calculo da sobra
                    $rest = $qtde * $minimo;
                    $valor = $salario - $rest;

                    // Converter antes de exibir
                    $conv = number_format($valor, 2, ',', '.');
                    
                    // Exibir na tela para o usuário
                    echo "<p>Quem recebe um salário de R$ $salario ganha <strong>$qtde sálarios mínimos</strong> + R$ $conv</p>";                                       
                
                ?>                
        </section>

    </body>
</html>
