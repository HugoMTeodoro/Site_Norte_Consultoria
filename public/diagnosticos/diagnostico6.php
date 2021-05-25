<?php
include("../../data/connection.php");
include("../Login/valida.php");
$quantdisp = 0;



$sql = "select count(*) as quantdisp from dispensa where emergencia='sim'";
$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
        $quantdisp=$exibir["quantdisp"];
    }
}
echo $quantdisp;
?>