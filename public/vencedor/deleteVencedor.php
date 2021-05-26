<?php
include_once("../../data/connection.php");
include("../Login/valida.php");
$tipo = $_POST["tipo"];
$action = $_POST["action"];
$sql = "select codigo_processo,valor FROM vencedor WHERE id_vencedor = " . $_POST["id"];
$resultado = $connection->query($sql);
while ($percorrer = $resultado->fetch_assoc()) {
    $valor=$percorrer['valor'];
    $codigo = $percorrer['codigo_processo'];
}



$sql = "select valor_total from $tipo where codigo_processo = '$codigo'";

$resultado = $connection->query($sql);
if ($resultado->num_rows > 0) {
    while ($exibir = $resultado->fetch_assoc()) {
        $valor_total = $exibir["valor_total"];
    }
}


$valor_total = $valor_total - $valor;


$sql = "update $tipo set valor_total=$valor_total
where codigo_processo='$codigo'";


$resultado = $connection->query($sql);








$sql = "DELETE FROM vencedor WHERE id_vencedor = " . $_POST["id"];
$resultado = $connection->query($sql);

if ($connection->query($sql) === TRUE) {
?>
    <form name="myform" action="<?php echo $action."#vencedores" ?>" method="POST">
        <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
        <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
        <input type="hidden" name="action" value="<?php echo $action ?>">
    </form>

    <script type="text/javascript">
       alert("Vencedor deletado com sucesso");
       document.myform.submit();
    </script>
<?php


} else {
?>
    <script>
        alert("Erro ao excluir o vencedor");
        window.location = "createVencedor.php";
    </script>
<?php

}


?>