<?php
include_once("../../data/connection.php");
if (isset($_GET["id"])) {

    $sql = "select codigo_processo FROM adesao WHERE id_adesao = " . $_GET["id"];
    $resultado = $connection -> query($sql);

    if ($resultado->num_rows > 0) {
        while ($exibir = $resultado->fetch_assoc()) {
            $codigo = $exibir["codigo_processo"];
        }
    }

    $sql = "DELETE FROM vencedor  WHERE codigo_processo ='$codigo' " ;
    $resultado = $connection -> query($sql);

    $sql = "DELETE FROM aditivo  WHERE codigo_processo = '$codigo'";
    $resultado = $connection -> query($sql);


    $sql = "DELETE FROM adesao WHERE id_adesao = " . $_GET["id"];
    if ($connection->query($sql) === TRUE) {
?>
        <script>
            alert("Adesão excluída com sucesso");
            window.location = "listAdesao.php";
        </script>
    <?php
    } else {
        echo $sql;
    ?>
        <script>
            alert("Erro ao excluir a adesão");
        </script>
<?php
    }
}
?>