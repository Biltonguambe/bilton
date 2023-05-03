<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

       $v = $_REQUEST["valor"] ?? 0;
       
       $coversor = $v/$cotacao;
       $cotacao = 58;
       /*

        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            
        $dados = json_decode(file_get_contents($url), true); 

        

        $cotacao = $dados["value"][0]["cotacaoCompra"];
        

        

     



       $padrao = numfmt_create("pt_PT",NumberFormatter::CURRENCY);

       echo "Seus".numfmt_format_currency($padrao, $coversor, "MZN"); */

        echo "<p> seus $v meticais, correspodem a $coversor dolares</p>";
        echo "sedo que  dolar custa a $dolar"

       
    ?>

<p><button onclick="javascript:history.go(-1)">Voltar</button></p>
</body>
</html>