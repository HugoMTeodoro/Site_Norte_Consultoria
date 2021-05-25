<?php 
include("../Login/valida.php");
        include_once("../../data/connection.php");
        if (isset ($_GET["id"])) {


            $sql = "select codigo_processo FROM modalidade WHERE id_modalidade = " . $_GET["id"];
            $resultado = $connection->query($sql);
        
            if ($resultado->num_rows > 0) {
                while ($exibir = $resultado->fetch_assoc()) {
                    $codigo = $exibir["codigo_processo"];
                }
            }
        
            $sql = "DELETE FROM vencedores  WHERE id_modalidade ='$codigo' ";
            $resultado = $connection->query($sql);
        
            $sql = "DELETE FROM aditivo  WHERE id_modalidade = '$codigo'";
            $resultado = $connection->query($sql);














            $sql = "DELETE FROM modalidade WHERE id_modalidade = " . $_GET["id"];

            if ($connection -> query($sql) === TRUE) {
 ?>
                <script>
            alert ("Modalidade excluída com sucesso");
            window.location = "listModalidade.php";
                </script>

                <?php
            

            }
        else {
               ?>
            <script>
            alert("Erro ao excluir a modalidade");
            window.location = "listModalidade.php";
            </script> 
<?php

    }
}

?>