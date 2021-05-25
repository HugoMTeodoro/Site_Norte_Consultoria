<?php
include("../../data/connection.php");
include("../Login/valida.php");
$quantdisp=0;
$quantadesao=0;
$quantinex=0;
$quantmodal=0;
$quantpregao=0;


$sql="select categoria from categoria";
$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    
    while ($exibir = $dados->fetch_assoc()) {
        $cat=$exibir["categoria"];
        $sql2="SELECT count(*) as quantdisp FROM `dispensa` where categoria='$cat'";
        $dados2 = $connection->query($sql2);
        if ($dados2->num_rows > 0) {
            while ($exibir2 = $dados2->fetch_assoc()) {
            $quantdisp=$exibir2["quantdisp"];
            }
        }

        $sql3="SELECT count(*) as quantadesao FROM `adesao` where categoria='$cat'";
        $dados3 = $connection->query($sql2);
        if ($dados3->num_rows > 0) {
            while ($exibir3 = $dados3->fetch_assoc()) {
            $quantadesao=$exibir3["quantdisp"];
            }
        }


    }

}
