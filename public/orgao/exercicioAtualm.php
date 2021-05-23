<?php
include_once("../../data/connection.php");
$exercicio = $_GET["param"];
$sql = "UPDATE  
    orgao_atual set exercicio_atual='$exercicio' where id_orgao_atual=1";
    $resultado = $connection -> query($sql);
?>
<script>
window.location.href=('Object', 'Title', '/projetos/Site_Norte_Consultoria/public/modalidade/listModalidade.php');
</script>
