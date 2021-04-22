
<?php 
        include_once("../../data/connection.php");
        if (isset ($_GET["id"])) {
            $sql = "DELETE FROM orgao WHERE id_orgao = " . $_GET["id"];

            if ($connection -> query($sql) === TRUE) {
 ?>
                <script>
            alert ("Orgão excluída com sucesso");
            window.location = "listOrgao.php";
                </script>

                <?php
            

            }
        else {
            echo $sql;
               ?>
            <script>
            alert("Erro ao excluir o orgão");
            
            </script> 
            
<?php

    }
}

?>