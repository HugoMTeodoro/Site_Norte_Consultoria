<?php include("../Template/header.php");
include("../../data/connection.php");

$sql="select SUM(datediff(data_ratificacao, data_solicitacao_compras_servicos)) as mediadispensa, count(*) as quantpregao from dispensa";
$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
        
    }

$sql="select SUM(datediff(dt_ratificacao, dt_solicitacao)) as mediaadesao, count(*) as quantpregao from adesao";
$sql="select SUM(datediff(dt_ratificacao, dt_solicitacao)) as mediainex, count(*) as quantpregao from inexigibilidade";
$sql="select SUM(datediff(dt_homologacao, dt_solicitacao)) as mediamodal, count(*) as quantpregao from modalidade";
$sql="select SUM(datediff(dt_homologacao, dt_solicitacao)) as mediamodal, count(*) as quantpregao from pregao";



?>