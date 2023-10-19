<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 17 (13 do Guanabara)</title>
        <link rel="stylesheet" href="style.css">
        <style>
            img.nota {
                height: 50px;
                margin: 5px;
            }
        </style>
    </head>
    <body>
        <?php 
            // Capturando os dados
            $valor = $_GET['valor'] ?? 0;                            
        ?>
        <header>
            <h1>Caixa Eletrônico</h1>
        </header>
        <main>            
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">                                
                <label for="nome">Qual valor você deseja sacar? (R$)*</label>
                <input type="number" name="valor" id="valor" step="5" value="<?= $valor ?>">                                                                

                <p style="font-size: 0.7em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
                <input type="submit" value="Sacar">
            </form>            
        </main>  
        
        <?php 
                
            $saque = $valor;
            // saque de R$ 100
            $tot100 = floor($saque / 100);
            $saque = $saque % 100;

            // saque de R$ 50
            $tot50 = floor($saque / 50);
            $saque %= 50;

            // saque de R$ 10
            $tot10 = floor($saque / 10);
            $saque %= 10;

            // saque de R$ 5
            $tot5 = floor($saque / 5);
            $saque %= 5;

            //echo "Seu saque de R\$$saque vai resultar em $tot100 notas de 100, $tot50 notas de 50, $tot10 notas de 10 e $tot5 notas de 5. Faltou $saque reais para sacar."
                
        ?>
        
        <section id="resultado">
                
                <h2>Saque de R$<?= number_format($valor, 2, ',', '.') ?> realizado</h2>              
                <ul>
                    <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota">x <?= $tot100?></li>
                    <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota">x <?= $tot50?></li>
                    <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota">x <?= $tot10?></li>
                    <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota">x <?= $tot5?></li>                    
                </ul>
                         
                
                
        </section>

        

    </body>
</html>

