<?php
include("../../data/connection.php");
include("../Login/valida.php");
$quant=0;

$sql= "select count(*) as quantdisp from aditivo where categoria='Obras e serviços de engenharia'";
$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
        if($exibir["quantdisp"]>0){
        $quant=$exibir["quantdisp"];
        }
    }
}
echo $quant;
?>
