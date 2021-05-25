<?php
include("../../data/connection.php");

include("../Template/header.php");
$mediadisp = 0;
$mediaadesao = 0;
$mediainex = 0;
$mediageral = 0;
$quantgeral = 0;
$mediapregao = 0;

$sql = "select SUM(datediff(data_publicacao, dt_abertura)) as mediadispensa, count(*) as quantdisp from dispensa where orgao='$orgaoa' and exercicio ='$exer'";

$dados = $connection->query($sql);
if ($dados->num_rows > 0) {

    while ($exibir = $dados->fetch_assoc()) {
        if ($exibir["quantdisp"] > 0) {
            $mediadisp = $exibir["mediadispensa"] / $exibir["quantdisp"];
        }
    }
}


$sql = "select SUM(datediff(dt_publicacao, dt_abertura)) as mediaadesao, count(*) as quantadesao from adesao where orgao='$orgaoa' and exercicio ='$exer'";
$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
        if ($exibir["quantadesao"] > 0) {
            $mediaadesao = $exibir["mediaadesao"] / $exibir["quantadesao"];
        }
    }
}



$sql = "select SUM(datediff(dt_publicacao, dt_abertura)) as mediainex, count(*) as quantinex from inexigibilidade where orgao='$orgaoa' and exercicio ='$exer'";
$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
        if ($exibir["quantinex"] > 0) {
            $mediainex = $exibir["mediainex"] / $exibir["quantinex"];
        }
    }
}


$sql = "select modalidade from tipo_modalidade";
$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($row = $dados->fetch_assoc()) {
        $arraymodalidades[] = $row["modalidade"];
    }
}

foreach ($arraymodalidades as &$modal) {
    $sql = "select SUM(datediff(dt_publicacao, dt_abertura)) as mediamodal, count(*) as quantmod from modalidade where modalidade='$modal' and orgao='$orgaoa' and exercicio ='$exer'";
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


$sql = "select SUM(datediff(dt_publicacao, dt_abertura)) as mediapregao, count(*) as quantpregao from pregao where orgao='$orgaoa' and exercicio ='$exer'";
$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
        if ($exibir["quantpregao"] > 0) {
            $mediapregao = $exibir["mediapregao"] / $exibir["quantpregao"];
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
                ['Processo', 'Tempo em dias'],
                ['Média geral', <?php echo $mediageral ?>],
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
                    title: 'Tempo médio de publicação dos editais:',
                    subtitle: 'Medido do dia da publicação do edital até o dia da abertura.',

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