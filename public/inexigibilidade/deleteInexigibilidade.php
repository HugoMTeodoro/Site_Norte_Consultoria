<?php
include("../Login/valida.php");
include_once("../../data/connection.php");
if (isset($_GET["id"])) {


    $sql = "select codigo_processo FROM inexigibilidade WHERE id_inexigibilidade = " . $_GET["id"];
    $resultado = $connection->query($sql);

    if ($resultado->num_rows > 0) {
        while ($exibir = $resultado->fetch_assoc()) {
            $codigo = $exibir["codigo_processo"];
        }
    }

    $sql = "DELETE FROM vencedores  WHERE id_inexigibilidade ='$codigo' ";
    $resultado = $connection->query($sql);

    $sql = "DELETE FROM aditivo  WHERE id_inexigibilidade = '$codigo'";
    $resultado = $connection->query($sql);









    $sql = "DELETE FROM inexigibilidade WHERE id_inexigibilidade = " . $_GET["id"];

    if ($connection->query($sql) === TRUE) {
?>
        <script>
            alert("Inexigibilidade excluída com sucesso");
            window.location = "listInexigibilidade.php";
        </script>

    <?php


    } else {
    ?>
        <script>
            alert("Erro ao excluir a inexigibilidade");
            window.location = "listInexigibilidade.php";
        </script>
<?php

    }
}

?>