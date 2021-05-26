<?php
include_once("../../data/connection.php");
include("../Login/valida.php");
$action = $_POST["action"];
$tipo = $_POST["tipo"];

$sql = "select codigo_processo,valor_aditivo FROM aditivo WHERE id_aditivo = " . $_POST["id"];
$resultado = $connection->query($sql);
while ($percorrer = $resultado->fetch_assoc()) {
    $valor=$percorrer['valor_aditivo'];
    $codigo_proc = $percorrer['codigo_processo'];
}






$sql = "select valor_aditivo from $tipo where codigo_processo = '$codigo_proc'";

$resultado = $connection->query($sql);
if ($resultado->num_rows > 0) {
    while ($exibir = $resultado->fetch_assoc()) {
        $valor_aditivo = $exibir["valor_aditivo"];
    }
}


$valor_aditivo = $valor_aditivo - $valor;

$sql = "update $tipo set valor_aditivo=$valor_aditivo
    where codigo_processo='$codigo_proc'";
echo $sql;


$resultado = $connection->query($sql);








$sql = "DELETE FROM aditivo WHERE id_aditivo = " . $_POST["id"];

$resultado = $connection->query($sql);

if ($connection->query($sql) === TRUE) {
?>
    <form name="myform" action="<?php echo $action."#aditivo" ?>" method="POST">
        <input type="hidden" name="codigo" value="<?php echo $codigo_proc ?>">
        <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
        <input type="hidden" name="action" value="<?php echo $action ?>">
    </form>

    <script type="text/javascript">
        alert("Aditivo excluido com sucesso");
        document.myform.submit();
    </script>

<?php


} else {
?>
    <script>
        alert("Erro ao excluir o aditivo");
        window.location = "../vencedor/createVencedor.php";
    </script>
<?php

}


?>