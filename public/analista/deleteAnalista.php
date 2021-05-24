
<?php 
        include_once("../../data/connection.php");
        include("../Login/valida.php");
        if (isset ($_GET["id"])) {
            $sql = "DELETE FROM analista WHERE id_analista = " . $_GET["id"];

            if ($connection -> query($sql) === TRUE) {
 ?>
                <script>
            alert ("Analista excluído com sucesso");
            window.location = "listAnalista.php";
                </script>

                <?php
            

            }
        else {
            echo $sql;
               ?>
            <script>
            alert("Erro ao excluir o analista");
            
            </script> 
            
<?php

    }
}

?>