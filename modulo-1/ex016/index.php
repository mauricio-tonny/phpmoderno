<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 16 (12 do Guanabara)</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            // Capturando os dados
            $tempo = $_GET['tempo'] ?? 0;                    
        ?>
        <header>
            <h1>Calculadora de Tempo</h1>
        </header>
        <main>            
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">                                
                <label for="nome">Qual o total de segundos ?</label>
                <input type="number" name="tempo" id="tempo" value="<?= $tempo ?>">                                                                

                <input type="submit" value="Calcular">
            </form>            
        </main>   
        
        <section id="resultado">
                <h2>Totalizando tudo</h2>                
                <?php 
                    $sobra = $tempo;
                    // 1 semana = 604800 segundos
                    $semana = intval($sobra / 604800);
                    $sobra = $sobra % 604800;

                    // 1 dia = 86400 segundos
                    $dias = intval($sobra / 86400);
                    $sobra = $sobra % 86400;

                    // 1 hora = 3600 segundos
                    $horas = intval($sobra / 3600); 
                    $sobra = $sobra % 3600;

                    // 1 minuto = 60 segundos               
                    $minutos = intval($sobra / 60);
                    $sobra = $sobra % 60;

                    // 1 segundo = 1 segundo
                    $segundos =  $sobra;

                    
                    // Exibir na tela para o usuário
                    echo "<p>Analisando o valor que você digitou, <strong>$tempo segundos</strong> equivalem a um total de:</p>";          

                    echo    "
                                <ul>
                                    <li>$semana semanas</li>
                                    <li>$dias dias</li>
                                    <li>$horas horas</li>
                                    <li>$minutos minutos</li>
                                    <li>$segundos segundos</li>
                                </ul>
                            "
                
                ?>                
        </section>

        

    </body>
</html>
