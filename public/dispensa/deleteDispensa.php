<?php
include("../Login/valida.php");
include_once("../../data/connection.php");
if (isset($_GET["id"])) {


    $sql = "select codigo_processo FROM dispensa WHERE id_dispensa = " . $_GET["id"];
    $resultado = $connection->query($sql);

    if ($resultado->num_rows > 0) {
        while ($exibir = $resultado->fetch_assoc()) {
            $codigo = $exibir["codigo_processo"];
        }
    }

    $sql = "DELETE FROM vencedores  WHERE id_dispensa ='$codigo' ";
    $resultado = $connection->query($sql);

    $sql = "DELETE FROM aditivo  WHERE id_dispensa = '$codigo'";
    $resultado = $connection->query($sql);











    $sql = "DELETE FROM dispensa WHERE id_dispensa = " . $_GET["id"];

    if ($connection->query($sql) === TRUE) {
?>
        <script>
            alert("Dispensa excluída com sucesso");
            window.location = "listDispensa.php";
        </script>

    <?php


    } else {
    ?>
        <script>
            alert("Erro ao excluir a dispensa");
            window.location = "listDispensa.php";
        </script>
<?php

    }
}

?>