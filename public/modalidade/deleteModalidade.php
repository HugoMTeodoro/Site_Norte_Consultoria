<?php 
        include_once("../../data/connection.php");
        if (isset ($_GET["id"])) {
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