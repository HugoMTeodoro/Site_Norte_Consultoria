<?php
include("../../data/connection.php");

include("../Template/header.php");

$quant = 0;
$quant2 = 0;
$sql = "select count(*) as quantdisp from aditivo where categoria='Obras e serviços de engenharia' and orgao='$orgaoa' and exercicio ='$exer' ";

$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
        if ($exibir["quantdisp"] > 0) {
            $quant = $exibir["quantdisp"];
        }
    }
}



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
                ['', 'Quantidade', {role: 'style'}],
                ['Aditivados:', 0, '#b87333'], // RGB value
                ['Processos de obras', <?php echo $quant ?>, '#b87333'],
               

            ]);

            var options = {
                chart: {
                    title: 'Processos de obras aditivados:',
                    subtitle: '',

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