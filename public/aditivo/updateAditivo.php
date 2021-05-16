<?php

include_once("../../data/connection.php");

if (isset($_POST)) {
$numero_aditivo = $_POST["numAditivo"];
$data_aditivo = $_POST["dateAditivo"];
$tipoAditivo = $_POST["tipoAditivo"];
$Empresa = $_POST["Empresa"];
$datePrazo = $_POST["datePrazo"];
$numValorAditivo = $_POST["numValorAditivo"];
$tipo = $_POST["tipo"];
$idaditivo = $_POST["id"];
$codigo_proc = $_POST["codigo"];
$action = $_POST["action"];

$sql = "UPDATE aditivo SET numero_aditivo='$numero_aditivo', data_aditivo='$data_aditivo', valor_aditivo='$numValorAditivo', tipo_aditivo='$tipoAditivo', nome_empresa='$Empresa' where id_aditivo='$idaditivo'";





$resultado = $connection->query($sql);

if ($resultado) { ?>
    <form name="myform" action="<?php echo $action ?>" method="POST">
        <input type="hidden" name="codigo" value="<?php echo $codigo_proc ?>">
        <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
        <input type="hidden" name="action" value="<?php echo $action ?>">
    </form>

    <script type="text/javascript">
        alert("Aditivo editado com sucesso");
        document.myform.submit();
    </script>
<?php
} else {
?>

    <script>
        alert("Ocorreu um erro ao editar o aditivo");
        window.location = '../vencedor/createVencedor.php';
    </script>
<?php
}
}

?>