<?php
include("../../data/connection.php");
include("../Template/header.php");


$mediadisp = 0;
$mediaadesao = 0;
$mediainex = 0;
$mediapregao = 0;
$quant=0;

$sql = "select categoria from categoria";
$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($row = $dados->fetch_assoc()) {
        $arraycat[] = $row["categoria"];
    }
}

foreach ($arraycat as &$cat) {

    $sql2 = "SELECT count(*) as quantdisp FROM `dispensa` where categoria='$cat' and orgao='$orgaoa' and exercicio ='$exer'";
    $dados2 = $connection->query($sql2);
    if ($dados2->num_rows > 0) {
        while ($exibir2 = $dados2->fetch_assoc()) {
            $quant = $quant + $exibir2["quantdisp"];
        }
    }


    $sql3 = "SELECT count(*) as quantadesao FROM `adesao` where categoria='$cat' and orgao='$orgaoa' and exercicio ='$exer'";
    $dados3 = $connection->query($sql3);
    if ($dados3->num_rows > 0) {
        while ($exibir3 = $dados3->fetch_assoc()) {
            $quant = $quant + $exibir3["quantadesao"];
        }
    }

    $sql3 = "SELECT count(*) as quantinex FROM `inexigibilidade` where categoria='$cat' and orgao='$orgaoa' and exercicio ='$exer'";
    $dados3 = $connection->query($sql3);
    if ($dados3->num_rows > 0) {
        while ($exibir3 = $dados3->fetch_assoc()) {
            $quant = $quant + $exibir3["quantinex"];
        }
    }

    $sql3 = "SELECT count(*) as quantpreg FROM `pregao` where categoria='$cat' and orgao='$orgaoa' and exercicio ='$exer'";
    $dados3 = $connection->query($sql3);
    if ($dados3->num_rows > 0) {
        while ($exibir3 = $dados3->fetch_assoc()) {
           
                $quant = $quant + $exibir3["quantpreg"];
            
            
        }
    }

    
        $sql = "SELECT count(*) as quantmod FROM `modalidade` where categoria='$cat' and orgao='$orgaoa' and exercicio ='$exer'";
        $dados = $connection->query($sql);
        if ($dados->num_rows > 0) {
            while ($exibir = $dados->fetch_assoc()) {
                    $quant = $quant + $exibir["quantmod"];
            }
        }
    
    $arraymedia[]=$quant;
    $quant=0;
}
$max = sizeof($arraycat);
?>

<html>

<head>
    <br>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['bar']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {


            var data = google.visualization.arrayToDataTable([
         ['', 'Quantidade', { role: 'style' }],
         ['Categorias:', 0, '#b87333'],            // RGB value
         
         <?php
                for ($i = 0; $i < $max; $i++) {
                    echo "['" . $arraycat[$i] . "', '" . $arraymedia[$i] . "', '#b87333'],";
                }
                ?>
       // CSS-style declaration
      ]);

            var options = {
                chart: {
                    title: 'Média de tempo gasto para a realização de um procedimento licitatório:',
                    subtitle: 'Diagnosticados em dias desde a Solicitação até a homologação.',

                }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));



            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>

</head>

<body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>


</body>

</html>