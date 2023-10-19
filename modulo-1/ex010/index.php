<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 10 (6 do Guanabara)</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            // Capturando os dados
            $dividendo = $_GET['divid'] ?? 0;
            $divisor = $_GET['divis'] ?? 1;        
        ?>
        <header>
            <h1>Anatomia de uma Divisão</h1>
        </header>
        <main>            
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
                <label for="nome">Dividendo</label>
                <input type="number" name="divid" id="divid" value="<?= $dividendo ?>">                

                <label for="nome">Divisor</label>
                <input type="number" name="divis" id="divis" value="<?= $divisor ?>">                

                    <input type="submit" value="Analisar">
            </form>            
        </main>   
        
        <section id="resultado">
                <h2>Estrutura da Divisão</h2>
                
                <?php 
                // Calculos da divisão
                    $resultado = $dividendo / $divisor;

                    $valor = intval($resultado); 
                    $resto = substr(strpbrk($resultado, '.,'), 1);                                
                
                ?>

                <div style="font-size: 18px;">
                    <div>
                        <span><?= $dividendo ?></span>
                        <span style="border-left: solid 2px; border-bottom: solid 2px; padding: 5px; margin-right: 30%; float: right;"><?= $divisor ?></span>
                    </div>
                    <div style="margin-top: 20px;">
                        <span><?= $resto ?></span>
                        <span style="margin-right: 30%; float: right;"><?= $valor ?></span>
                    </div>
                </div>
        </section>

    </body>
</html>
