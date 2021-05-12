<?php 
        include_once("../../data/connection.php");
        if (isset ($_GET["id"])) {
            $sql = "DELETE FROM aditivo WHERE id_aditivo = " . $_GET["id"];

            if ($connection -> query($sql) === TRUE) {
 ?>
                <script>
            alert ("Aditivo excluída com sucesso");
            window.location = "../vencedor/createVencedor.php";
                </script>

                <?php
            

            }
        else {
               ?>
            <script>
            alert("Erro ao excluir o aditivo");
            window.location = "../vencedor/createVencedor.php";
            </script> 
<?php

    }
}

?>