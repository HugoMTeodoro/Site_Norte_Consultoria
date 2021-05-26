<?php
include("../../data/connection.php");
include("../Template/header.php");
include("../Login/valida.php");
$mediadisp = 0;
$mediaadesao = 0;
$mediainex = 0;
$mediageral = 0;
$quantgeral = 0;
$mediapregao = 0;

$sql = "select SUM(datediff(data_parecer_juridico, data_autorizacao_abertura)) as mediadispensa, count(*) as quantdisp from dispensa where orgao='$orgaoa' and exercicio ='$exer'";

$dados = $connection->query($sql);
if ($dados->num_rows > 0) {

    while ($exibir = $dados->fetch_assoc()) {
        if ($exibir["quantdisp"] > 0) {
            $mediageral = $mediageral + $exibir["mediadispensa"];
            $quantgeral = $quantgeral + $exibir["quantdisp"];
            $mediadisp = $exibir["mediadispensa"] / $exibir["quantdisp"];
        }
    }
}
//echo $mediadisp;

$sql = "select SUM(datediff(dt_parecer, dt_autorizacao_abertura)) as mediaadesao, count(*) as quantadesao from adesao where orgao='$orgaoa' and exercicio ='$exer'";
$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
        if ($exibir["quantadesao"] > 0) {
            $mediageral = $mediageral + $exibir["mediaadesao"];
            $quantgeral = $quantgeral + $exibir["quantadesao"];
            $mediaadesao = $exibir["mediaadesao"] / $exibir["quantadesao"];
        }
    }
}
//echo $mediaadesao;


$sql = "select SUM(datediff(dt_parecer_juridico, dt_autorizacao)) as mediainex, count(*) as quantinex from inexigibilidade where orgao='$orgaoa' and exercicio ='$exer'";

$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
        if ($exibir["quantinex"] > 0) {
            $mediageral = $mediageral + $exibir["mediainex"];
            $quantgeral = $quantgeral + $exibir["quantinex"];
            $mediainex = $exibir["mediainex"] / $exibir["quantinex"];
        }
    }
}
//echo $mediainex;


$sql = "select modalidade from tipo_modalidade";
$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($row = $dados->fetch_assoc()) {
        $arraymodalidades[] = $row["modalidade"];
    }
}

foreach ($arraymodalidades as &$modal) {
    $sql = "select SUM(datediff(dt_parecer_juridico, dt_autorizacao)) as mediamodal, count(*) as quantmod from modalidade where modalidade='$modal' and orgao='$orgaoa' and exercicio ='$exer'";
    $dados = $connection->query($sql);
    if ($dados->num_rows > 0) {
        while ($exibir = $dados->fetch_assoc()) {

            if ($exibir["quantmod"] > 0) {
                $mediageral = $mediageral + $exibir["mediamodal"];
                $quantgeral = $quantgeral + $exibir["quantmod"];
                $mediamodal[] = $exibir["mediamodal"] / $exibir["quantmod"];
            } else {
                $mediamodal[] = 0;
            }
        }
    }
}
$max = sizeof($arraymodalidades);




$sql = "select SUM(datediff(dt_parecer, dt_autorizacao)) as mediapregao, count(*) as quantpregao from pregao where orgao='$orgaoa' and exercicio ='$exer'";
$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
        if ($exibir["quantpregao"] > 0) {
            $mediageral = $mediageral + $exibir["mediapregao"];
            $quantgeral = $quantgeral + $exibir["quantpregao"];
            $mediapregao = $exibir["mediapregao"] / $exibir["quantpregao"];
        }
    }
}
//echo $mediapregao;
$mediageral = $mediageral / $quantgeral;

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
                ['Media geral', <?php echo $mediageral ?>],
                ['Adesão', <?php echo $mediaadesao ?>],
                ['Dispensa', <?php echo $mediadisp ?>],
                ['Inexigibilidade', <?php echo $mediainex ?>],
                ['Pregão', <?php echo $mediapregao ?>],
                <?php
                for ($i = 0; $i < $max; $i++) {
                    echo "['" . $arraymodalidades[$i] . "', '" . $mediamodal[$i] . "'],";
                }
                ?>
            ]);

            var options = {
                chart: {
                    title: 'Média de tempo tempo médio gasto na aprovação das minutas de edital e contrato:',
                    subtitle: 'Diagnosticados em dias desde a autorização de abertura até a data do parecer.',

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