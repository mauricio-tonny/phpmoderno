<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 04</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Conversor de Moedas V2.0</h1>
        </header>
        <main>
            <?php                 
                $valorRS = $_GET["number"] ?? "0";

                // consome a data atual - 7 dias e a data de hoje
                $inicio = date("m-d-Y", strtotime("-7 days"));
                $fim = date("m-d-Y");

                // puxa o dado atualizado da API do BC com base na data exposta acima
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
                $dados = json_decode(file_get_contents($url), true);                

                // consome apenas os dados necessários para a cotacao do JSON
                $cotacao = $dados["value"][0]["cotacaoCompra"];              

                // faz a conversão do valor
                $valorUSD = ($valorRS / $cotacao);
                $valorFormatBRL = number_format($valorRS, 2, '.', '');
                $valorFormatUSD = number_format($valorUSD, 2, '.', '');
                              
                echo "<p>Seus R$ $valorFormatBRL equivalem à <strong>US$ $valorFormatUSD</strong> aproximadamente</p>";                
                echo "<p>Cotação obtida diretamente no site do <strong>Banco Central do Brasil</strong></p>";

            ?>
            <div style="display: flex; justify-content: center;">
                <a class="zz_button" href="javascript:history.go(-1)">Voltar</a>
            </div>
        </main>        
    </body>
</html>