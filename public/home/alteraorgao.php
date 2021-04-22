<?php 
include("../../data/connection.php");
$orgao = $_POST["orgao"]; 
$sqlQuery = "UPDATE orgao_atual
SET nome_orgao_atual = '$orgao'
WHERE id_orgao_atual = 0;";
        


$orgaos = $connection->query($sqlQuery);

?>
 <script>
window.location = "../home/home.php";
</script>