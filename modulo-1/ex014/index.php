<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 14 (10 do Guanabara)</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            // Capturando os dados
            $ano = $_GET['ano'] ?? 2000;
            // Exibe o ano atual
            $atual = date("Y");
            // Questiona o ano ou retorna o atual
            $futuro = $_GET['futuro'] ?? $atual;
            
        ?>
        <header>
            <h1>Calculando a sua idade</h1>
        </header>
        <main>            
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">                                
                <label for="nome">Em que ano você nasceu?</label>
                <input type="number" min="1917" max="<?= $atual ?>" name="ano" id="ano" value="<?= $ano ?>">                                                

                <label for="nome">Quer saber sua idade em que ano? (Atualmente estamos em <strong><?= $atual ?></strong>)</label>
                <input type="number" name="futuro" id="futuro" value="<?= $futuro ?>">                                                

                <input type="submit" value="Qual será minha idade">
            </form>            
        </main>   
        
        <section id="resultado">
                <h2>Resultado</h2>                
                <?php 
                    // Calculador do ano
                    $idade = $futuro - $ano;                                   
                    
                    // Exibir na tela para o usuário
                    echo "<p>Quem nasceu em $ano vai ter <strong>$idade anos</strong> em $futuro !</p>";                                                           
                
                ?>                
        </section>

    </body>
</html>
