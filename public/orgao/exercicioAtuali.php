<?php
include_once("../../data/connection.php");
$exercicio = $_GET["param"];
$sql = "UPDATE  
    orgao_atual set exercicio_atual='$exercicio' where id_orgao_atual=1";
    $resultado = $connection -> query($sql);
?>
<script>
url = new URL(window.location.href);
url.searchParams.delete("param");
window.location.href=('Object', 'Title', '/norte/Site_Norte_Consultoria/public/inexigibilidade/listInexigibilidade.php');


</script>
