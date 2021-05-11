<?php 
        include_once("../../data/connection.php");
        if (isset ($_GET["id"])) {
            $sql = "DELETE FROM vencedor WHERE id_vencedor = " . $_GET["id"];

            if ($connection -> query($sql) === TRUE) {
 ?>
                <script>
            alert ("Vencedor excluída com sucesso");
            window.location = "createVencedor.php";
                </script>

                <?php
            

            }
        else {
               ?>
            <script>
            alert("Erro ao excluir o vencedor");
            window.location = "createVencedor.php";
            </script> 
<?php

    }
}

?>