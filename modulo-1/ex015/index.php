<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 15 (11 do Guanabara)</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            // Capturando os dados
            $price = $_GET['price'] ?? 0;
            $perc = $_GET['aliq'] ?? 0;            
        ?>
        <header>
            <h1>Reajustando Preços</h1>
        </header>
        <main>            
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">                                
                <label for="nome">Preço do produto</label>
                <input type="number" name="price" id="price" value="<?= $price ?>">                                                

                <label for="aliq">Qual será o percentual de reajuste <strong>(% <output id="value"></output>)</strong></label>
                <input type="range" min="0" max="100" name="aliq" id="aliq" value="<?= $perc ?>">                       

                <input type="submit" value="Reajustar">
            </form>            
        </main>   
        
        <section id="resultado">
                <h2>Resultado do Reajuste</h2>                
                <?php 
                    // calculo aliquota
                    $aliq = ($perc/100) * $price;
                    // calculo novo preco
                    $newprice = $price + $aliq;
                    
                    // Exibir na tela para o usuário
                    echo "<p>O produto que custava R$" . number_format($price, 2, ',', '.') . ", com <strong>$perc % de aumento</strong> vai passar a custar <strong>R$" . number_format($newprice, 2, ',', '.') . "</strong> a partir de agora.</p>";                                                           
                
                ?>                
        </section>

        <script>
            const value = document.querySelector("#value");
            const input = document.querySelector("#aliq");
            value.textContent = input.value;
            input.addEventListener("input", (event) => {
                value.textContent = event.target.value;
            });
        </script>

    </body>
</html>
