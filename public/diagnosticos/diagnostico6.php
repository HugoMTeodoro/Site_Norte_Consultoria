<?php
include("../../data/connection.php");

include("../Template/header.php");

$quantdisp = 0;
$quantdisp2=0;


$sql = "select count(*) as quantdisp from dispensa where emergencia='sim' and orgao='$orgaoa' and exercicio ='$exer' ";
$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
        $quantdisp=$exibir["quantdisp"];
    }
}

$sql = "select count(*) as quantdisp from dispensa where emergencia='nao' and orgao='$orgaoa' and exercicio ='$exer' ";
$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
        $quantdisp2=$exibir["quantdisp"];
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
                ['Processo', 'Tempo em dias'],
                ['Emergencais', <?php echo $quantdisp ?>],
                ['Nao Emergencais', <?php echo $quantdisp2 ?>],
                
       // CSS-style declaration
      ]);

            var options = {
                chart: {
                    title: 'Número de dispensas realizadas para atender a emergências:',
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