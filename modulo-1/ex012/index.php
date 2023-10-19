<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 12 (8 do Guanabara)</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            // Capturando os dados
            $numero = $_GET['numero'] ?? 0;          
            
        ?>
        <header>
            <h1>Informe um número</h1>
        </header>
        <main>            
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">                
                <label for="nome">Número</label>
                <input type="number" name="numero" id="numero" value="<?= $numero ?>">                                

                <input type="submit" value="Calcular Raízes">
            </form>            
        </main>   
        
        <section id="resultado">
                <h2>Resultado Final</h2>                
                <?php 
                    // Calculador da raíz
                    $raizqd = sqrt($numero);
                    $raizcb = pow($numero, 1.0/3.0);

                    //number_format($numero, 2, ',', '.')
                    
                    
                    // Exibir na tela para o usuário
                    echo "<p>Analisando o <strong>número $numero</strong>, temos:</p>";                                       

                    echo    "<ul>
                                <li>A sua raiz quadrada é <strong>" . number_format($raizqd, 3, ',') . "</strong></li>
                                <li>A sua raiz cúbica é <strong>" . number_format($raizcb, 3, ',') . "</strong></li>
                            </ul>"
                
                ?>                
        </section>

    </body>
</html>
