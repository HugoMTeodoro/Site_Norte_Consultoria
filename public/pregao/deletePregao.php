<?php
include("../Login/valida.php");

include_once("../../data/connection.php");
if (isset($_GET["id"])) {




    $sql = "select codigo_processo FROM pregao WHERE id_pregao = " . $_GET["id"];
    $resultado = $connection->query($sql);

    if ($resultado->num_rows > 0) {
        while ($exibir = $resultado->fetch_assoc()) {
            $codigo = $exibir["codigo_processo"];
        }
    }

    $sql = "DELETE FROM vencedores  WHERE id_pregao ='$codigo' ";
    $resultado = $connection->query($sql);

    $sql = "DELETE FROM aditivo  WHERE id_pregao = '$codigo'";
    $resultado = $connection->query($sql);








    $sql = "DELETE FROM pregao WHERE id_pregao = " . $_GET["id"];

    if ($connection->query($sql) === TRUE) {
?>
        <script>
            alert("Pregão excluído com sucesso");
            window.location = "listPregao.php";
        </script>

    <?php


    } else {
    ?>
        <script>
            alert("Erro ao excluir o pregão");
            window.location = "listPregao.php";
        </script>
<?php

    }
}

?>