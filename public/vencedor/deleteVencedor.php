<?php
include_once("../../data/connection.php");
if (isset($_GET["id"])) {
    $sql = "select codigo_processo FROM vencedor WHERE id_vencedor = " . $_GET["id"];
    $resultado = $connection->query($sql);
    while ($percorrer = $resultado->fetch_assoc()) {

        $codigo = $percorrer['codigo_processo'];
    }
    $sql = "DELETE FROM vencedor WHERE id_vencedor = " . $_GET["id"];

    if ($connection->query($sql) === TRUE) {
?>
        <form name="myform" action="../vencedor/createVencedor.php" method="POST">
            <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
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
}

?>