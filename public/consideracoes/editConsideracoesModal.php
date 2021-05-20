<?php include("../Template/header.php");
include("../../data/connection.php");
include("../Template/css.html");

$diag1 = '';
$diag2 = '';
$diag3 = '';
$diag4 = '';

$diag6 = '';
$diag7 = '';
$diag8 = '';
$diag9 = '';


$booldiag1 = false;
$booldiag2 = false;
$booldiag3 = false;
$booldiag4 = false;

$booldiag6 = false;
$booldiag7 = false;
$booldiag8 = false;
$booldiag9 = false;


$sql = "SELECT *,



DATEDIFF(dt_abertura, dt_orcamento) as difdiag2,
DATEDIFF(dt_autorizacao, dt_solicitacao) as difdiag3,
DATEDIFF(dt_autuacao, dt_autorizacao) as difdiag4,
DATEDIFF(dt_publicacao, dt_aprovacao) as difdiag6,
DATEDIFF(dt_ata_julgamento, dt_abertura) as difdiag7,
DATEDIFF(dt_parecer_juridico, dt_sessao) as difdiag8,
DATEDIFF(dt_contrato_firmado, dt_homologacao) as difdiag9,


from adesao where codigo_processo='$codigo';";

$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
       
        if ($exibir["difdiag2"] > 0) {
            $diag2 = $diag2 . "Excedeu a data de solicitacao ao orgao realizador em " . $exibir["difdiag2"] . " dias";
            $booldiag2 = true;
        }
        if ($exibir["difdiag3"] < 0) {
            $diag3 = $diag3 . "Essa data foi anterior à  solicitação de compras em " . ($exibir["difdiag3"] * -1) . " dias";
            $booldiag3 = true;
        }
        if ($exibir["difdiag4"] < 0) {
            $diag4 = $diag4 . "Essa data foi anterior à  data de solicitacao ao orgao em " . ($exibir["difdiag4"] * -1) . " dias";
            $booldiag4 = true;
        }
        if ($exibir["difdiag6"] < 0) {
            $diag6 = $diag6 . "Essa data foi anterior ao autorizacao do orgao realizador em " . ($exibir["difdiag6"] * -1) . " dias";
            $booldiag6 = true;
        }

        if ($exibir["difdiag7"] <0) {
            $diag7 = $diag7 . "Essa data foi anterior a solicitacao à empresa em " . $exibir["difdiag7"] . " dias";
            $booldiag7 = true;
        }
        if ($exibir["difdiag8"] <0) {
            $diag8 = $diag8 . "Essa data foi anterior a autorização da empresa adjudicatária em " . $exibir["difdiag8"] . " dias";
            $booldiag8 = true;
        }
        if ($exibir["difdiag9"] <0) {
            $diag9 = $diag9 . "Essa data foi anterior a autorização de abertura em " . $exibir["difdiag9"] . " dias";
            $booldiag9 = true;
        }
        if ($exibir["difdiag10"] <0) {
            $diag10 = $diag10 . "Essa data foi anterior a Ata de adesao em " . $exibir["difdiag10"] . " dias";
            $booldiag10 = true;
        }
        if ($exibir["difdiag11"] <0) {
            $diag11 = $diag11 . "Essa data foi anterior ao parecer juridico em " . $exibir["difdiag11"] . " dias";
            $booldiag11 = true;
        }
        if ($exibir["difdiag12"] >8) {
            $diag12 = $diag12 . "Essa data foi posterior a ratificacao em " . $exibir["difdiag12"] . " dias, quando permitido apenas 8 dias (art. 26, Lei 8.666/93)";
            $booldiag12 = true;
        }
        if ($exibir["difdiag13"] >=0) {
            $diag13 = $diag13 . "Essa data foi anterior a Homologação em " . $exibir["difdiag13"] . " dias";
            $booldiag13 = true;
        }

 }
 }
 ?>