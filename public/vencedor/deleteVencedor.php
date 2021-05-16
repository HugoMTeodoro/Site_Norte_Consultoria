<?php
include_once("../../data/connection.php");
$tipo=$_POST["tipo"];
$action=$_POST["action"];
    
    $sql = "select codigo_processo FROM vencedor WHERE id_vencedor = " . $_POST["id"];
    $resultado = $connection->query($sql);
    while ($percorrer = $resultado->fetch_assoc()) {

        $codigo = $percorrer['codigo_processo'];
    }
    $sql = "DELETE FROM vencedor WHERE id_vencedor = " . $_POST["id"];

    if ($connection->query($sql) === TRUE) {
?>
        <form name="myform" action="<?php echo $action ?>" method="POST">
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