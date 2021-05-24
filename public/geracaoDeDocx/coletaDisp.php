<?php
include_once("../../data/connection.php");
$codigo_proc = $_GET["id"];
$empresas='';
$sqlQuery = "SELECT * FROM vencedor where codigo_processo='$codigo_proc'";
$empresa = $connection->query($sqlQuery);
if ($empresa->num_rows > 0) {
    while ($row = $empresa->fetch_assoc()) {
        $empresas=$empresas . $row["nome_empresa"]." com o valor de R$".$row["valor"].", ";
?>
        
<?php
    }
}




$sqlQuery = "SELECT *,

DATE_FORMAT(data_autuacao,'%d/%m/%Y') as dataautuacao,
DATE_FORMAT(data_ratificacao,'%d/%m/%Y') as datarat


 FROM dispensa where codigo_processo='$codigo_proc'";
$dispensa = $connection->query($sqlQuery);
if ($dispensa->num_rows > 0) {
    while ($row = $dispensa->fetch_assoc()) {
?>
        <form name="myform" action="../geracaoDeDocx/geraDisp.php" method="POST">
        <input type="hidden" name="num_processo" value="<?php echo $row["num_processo"] ?>">
        <input type="hidden" name="num_dispensa" value="<?php echo $row["num_dispensa"] ?>">
        <input type="hidden" name="exercicio" value="<?php echo $row["exercicio"] ?>">
        <input type="hidden" name="orgao" value="<?php echo $row["orgao"] ?>">
        <input type="hidden" name="objeto" value="<?php echo $row["objeto"] ?>">
        <input type="hidden" name="observacoes" value="<?php echo $row["observacoes"] ?>">

            <input type="hidden" name="autuacao" value="<?php echo $row["dataautuacao"] ?>">
            <input type="hidden" name="rat" value="<?php echo $row["datarat"] ?>">
            <input type="hidden" name="empr" value="<?php echo $empresas ?>">
            <input type="hidden" name="conSolic" value="<?php echo $row["conSolic"] ?>">
            <input type="hidden" name="conPreco" value="<?php echo $row["conPreco"] ?>">
            <input type="hidden" name="conAut" value="<?php echo $row["conAut"] ?>">
            <input type="hidden" name="conAtuacao" value="<?php echo $row["conAtuacao"] ?>">
            <input type="hidden" name="conRat" value="<?php echo $row["conRat"] ?>">
            <input type="hidden" name="conPub" value="<?php echo $row["conPub"] ?>">
            <input type="hidden" name="conPar" value="<?php echo $row["conPar"] ?>">
            <input type="hidden" name="conAb" value="<?php echo $row["conAb"] ?>">
        </form>
<?php
    }
}
?>

<script>
    document.myform.submit();
</script>