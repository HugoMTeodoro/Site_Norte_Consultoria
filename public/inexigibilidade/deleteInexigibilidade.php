<?php 
        include("../Login/valida.php");
        include_once("../../data/connection.php");
        if (isset ($_GET["id"])) {
            $sql = "DELETE FROM inexigibilidade WHERE id_inexigibilidade = " . $_GET["id"];

            if ($connection -> query($sql) === TRUE) {
 ?>
                <script>
            alert ("Inexigibilidade excluída com sucesso");
            window.location = "listInexigibilidade.php";
                </script>

                <?php
            

            }
        else {
               ?>
            <script>
            alert("Erro ao excluir a inexigibilidade");
            window.location = "listInexigibilidade.php";
            </script> 
<?php

    }
}

?>