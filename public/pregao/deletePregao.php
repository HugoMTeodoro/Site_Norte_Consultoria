<?php

        include_once("../../data/connection.php");
        if (isset ($_GET["id"])) {
            $sql = "DELETE FROM pregao WHERE id_pregao = " . $_GET["id"];

            if ($connection -> query($sql) === TRUE) {
 ?>
                <script>
            alert ("Pregão excluído com sucesso");
            window.location = "listPregao.php";
                </script>

                <?php
            

            }
        else {
               ?>
            <script>
            alert("Erro ao excluir o pregão");
            window.location = "listPregao.php";
            </script> 
<?php

    }
}

?>