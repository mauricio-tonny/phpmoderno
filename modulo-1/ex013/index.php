<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 13 (9 do Guanabara)</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            // Capturando os dados
            $valor1 = $_GET['valor1'] ?? 0;          
            $peso1 = $_GET['peso1'] ?? 1;          

            $valor2 = $_GET['valor2'] ?? 0;          
            $peso2 = $_GET['peso2'] ?? 1;          
            
        ?>
        <header>
            <h1>Médias Aritméticas</h1>
        </header>
        <main>            
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">                
                <label for="nome">1º Valor</label>
                <input type="number" name="valor1" id="valor1" value="<?= $valor1 ?>">                                

                <label for="nome">1º Peso</label>
                <input type="number" name="peso1" id="peso1" value="<?= $peso1 ?>">    

                <label for="nome">2º Valor</label>
                <input type="number" name="valor2" id="valor2" value="<?= $valor2 ?>">                                                

                <label for="nome">2º Peso</label>
                <input type="number" name="peso2" id="peso2" value="<?= $peso2 ?>">  

                <input type="submit" value="Calcular Médias">
            </form>            
        </main>   
        
        <section id="resultado">
                <h2>Cálculo das Médias</h2>                
                <?php 
                    // Calculador da média
                    $mediasimp = ($valor1 + $valor2) / 2;
                    $sompes = $peso1 + $peso2;

                    $mediapond = (($valor1 * $peso1) + ($valor2 * $peso2)) / $sompes;

                    //number_format($numero, 2, ',', '.')
                    
                    
                    // Exibir na tela para o usuário
                    echo "<p>Analisando os valores $valor1 e $valor2:</p>";                                       

                    echo    "<ul>
                                <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a " .  number_format($mediasimp, 2, ',') . "</li>
                                <li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a " . number_format($mediapond, 2 ,',') . "</li>
                            </ul>"
                
                ?>                
        </section>

    </body>
</html>
