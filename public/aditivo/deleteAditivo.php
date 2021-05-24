<?php
include_once("../../data/connection.php");
include("../Login/valida.php");
    $action = $_POST["action"];
    $tipo=$_POST["tipo"];
    $sql = "select codigo_processo FROM aditivo WHERE id_aditivo = " . $_POST["id"];
    $resultado = $connection->query($sql);
    while ($percorrer = $resultado->fetch_assoc()) {

        $codigo_proc = $percorrer['codigo_processo'];
    }

    $sql = "DELETE FROM aditivo WHERE id_aditivo = " . $_POST["id"];

    if ($connection->query($sql) === TRUE) {
?>
        <form name="myform" action="<?php echo $action?>" method="POST">
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