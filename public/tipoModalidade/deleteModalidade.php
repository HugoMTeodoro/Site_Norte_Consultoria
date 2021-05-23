
<?php 
        include_once("../../data/connection.php");
        if (isset ($_GET["id"])) {
            $sql = "DELETE FROM tipo_modalidade WHERE id_modalidade = " . $_GET["id"];

            if ($connection -> query($sql) === TRUE) {
 ?>
                <script>
            alert ("Tipo modalidade excluída com sucesso");
            window.location = "listTipoModalidade.php";
                </script>

                <?php
            

            }
        else {
            echo $sql;
               ?>
            <script>
            alert("Erro ao excluir o tipo da modalidade");
            
            </script> 
            
<?php

    }
}

?>