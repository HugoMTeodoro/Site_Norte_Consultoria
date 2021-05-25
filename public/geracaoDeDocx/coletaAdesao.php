<?php
include("../Login/valida.php");
include_once("../../data/connection.php");
$codigo_proc = $_GET["id"];
$empresas = '';
$sqlQuery = "SELECT * FROM vencedor where codigo_processo='$codigo_proc'";
$empresa = $connection->query($sqlQuery);
if ($empresa->num_rows > 0) {
    while ($row = $empresa->fetch_assoc()) {
        $empresas = $empresas . $row["nome_empresa"] . " com o valor de R$" . $row["valor"] . ", ";
?>

    <?php
    }
}




$sqlQuery = "SELECT *,

DATE_FORMAT(dt_autuacao,'%d/%m/%Y') as dataautuacao,
DATE_FORMAT(dt_ratificacao,'%d/%m/%Y') as datarat


 FROM adesao where codigo_processo='$codigo_proc'";
$inex = $connection->query($sqlQuery);
if ($inex->num_rows > 0) {
    while ($row = $inex->fetch_assoc()) {
    ?>
        <form name="myform" action="../geracaoDeDocx/geraAdesao.php" method="POST">

            <input type="hidden" name="num_processo" value="<?php echo $row["num_inexigibilidade"] ?>">
            <input type="hidden" name="num_dispensa" value="<?php echo $row["num_adesao"] ?>">
            <input type="hidden" name="exercicio" value="<?php echo $row["exercicio"] ?>">
            <input type="hidden" name="orgao" value="<?php echo $row["orgao"] ?>">
            <input type="hidden" name="objeto" value="<?php echo $row["objeto"] ?>">
            <input type="hidden" name="observacoes" value="<?php echo $row["observacoes"] ?>">

            <input type="hidden" name="autuacao" value="<?php echo $row["dataautuacao"] ?>">
            <input type="hidden" name="rat" value="<?php echo $row["datarat"] ?>">
            <input type="hidden" name="empr" value="<?php echo $empresas ?>">

            <input type="hidden" name="conSolic" value="<?php echo $row["conSolic"] ?>">
            <input type="hidden" name="conPreco" value="<?php echo $row["conPreco"] ?>">
            <input type="hidden" name="conSolicO" value="<?php echo $row["conSolicO"] ?>">
            <input type="hidden" name="conAtori" value="<?php echo $row["conAtori"] ?>">
            <input type="hidden" name="conSolE" value="<?php echo $row["conSolE"] ?>">
            <input type="hidden" name="conAut" value="<?php echo $row["conAut"] ?>">
            <input type="hidden" name="conAuto" value="<?php echo $row["conAuto"] ?>">
            <input type="hidden" name="conAutuacao" value="<?php echo $row["conAutuacao"] ?>">
            <input type="hidden" name="conParec" value="<?php echo $row["conParec"] ?>">
            <input type="hidden" name="conRat" value="<?php echo $row["conRat"] ?>">
            <input type="hidden" name="conPub" value="<?php echo $row["conPub"] ?>">
            <input type="hidden" name="conFir" value="<?php echo $row["conFir"] ?>">
            <input type="hidden" name="conAb" value="<?php echo $row["conAb"] ?>">
            <input type="hidden" name="conAd" value="<?php echo $row["conAd"] ?>">
        </form>
<?php
    }
}
?>

<script>
    document.myform.submit();
</script>