<?php
include("../../data/connection.php");
<<<<<<< HEAD
include("../Template/header.php");
=======
include("../Login/valida.php");
>>>>>>> 175808b2dc8a4f54a41104b98cfbbed0cadc494b
$quant=0;
$quant2=0;
$sql= "select count(*) as quantdisp from aditivo where categoria='Obras e serviços de engenharia' and orgao='$orgaoa' and exercicio ='$exer' ";

$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
        if($exibir["quantdisp"]>0){
        $quant=$exibir["quantdisp"];
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
                ['Processo de obras', 'Quantidade aditivados'],
                ['Aditivados', <?php echo $quant ?>],
                ['Nao Aditivados', <?php echo $quant2 ?>],
                
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
