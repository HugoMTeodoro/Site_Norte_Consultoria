<?php include("../Template/header.php");
include("../../data/connection.php");

$mediadisp=0;
$mediaadesao=0;
$mediainex=0;
$mediamodal=0;
$mediapregao=0;

$sql="select SUM(datediff(data_ratificacao, data_solicitacao_compras_servicos)) as mediadispensa, count(*) as quantdisp from dispensa";
$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    
    while ($exibir = $dados->fetch_assoc()) {
        if($exibir["quantdisp"]>0){
        $mediadisp=$exibir["mediadispensa"]/$exibir["quantdisp"];
        }
    }
}
echo $mediadisp;

$sql="select SUM(datediff(dt_ratificacao, dt_solicitacao)) as mediaadesao, count(*) as quantadesao from adesao";
$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
        if($exibir["quantadesao"]>0){
        $mediaadesao=$exibir["mediaadesao"]/$exibir["quantadesao"];
        }
    }
}
echo $mediaadesao;


$sql="select SUM(datediff(dt_ratificacao, dt_solicitacao)) as mediainex, count(*) as quantinex from inexigibilidade";
$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
        if($exibir["quantinex"]>0){
        $mediainex=$exibir["mediainex"]/$exibir["quantinex"];
        }
    }
}
echo $mediainex;

$sql="select SUM(datediff(dt_homologacao, dt_solicitacao)) as mediamodal, count(*) as quantmod from modalidade";
$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
        if($exibir["quantmod"]>0){
        $mediamodal=$exibir["mediamodal"]/$exibir["quantmod"];
        }
    }
}
echo $mediamodal;

$sql="select SUM(datediff(dt_homologacao, dt_solicitacao)) as mediapregao, count(*) as quantpregao from pregao";
$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
        if($exibir["quantpregao"]>0){
        $mediapregao=$exibir["mediapregao"]/$exibir["quantpregao"];
        }
    }
}
echo $mediapregao;
?>
