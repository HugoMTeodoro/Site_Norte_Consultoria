<?php
include_once("../../data/connection.php");

$codigo_proc = $_GET["id"];
$sqlQuery = "SELECT *,

DATE_FORMAT(data_autuacao,'%d/%m/%Y') as dataautuacao,
DATE_FORMAT(data_homologacao,'%d/%m/%Y') as datahomo


 FROM dispensa where codigo_processo='$codigo_proc'";
$dispensa = $connection->query($sqlQuery);
if ($dispensa->num_rows > 0) {
    while ($row = $dispensa->fetch_assoc()) {
        $autuacao = $row["dataautuacao"];
        $homologacao=$row["datahomo"];
    }
}
?>
<form name="myform" action="../geracaoDeDocx/testedoc.php" method="POST">
    <input type="hidden" name="autuacao" value="<?php echo $autuacao ?>">
    <input type="hidden" name="autuacao" value="<?php echo $autuacao ?>">
</form>
<script>
    document.myform.submit();
</script>
