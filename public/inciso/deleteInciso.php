
<?php 
        include_once("../../data/connection.php");
        if (isset ($_GET["id"])) {
            $sql = "DELETE FROM inciso WHERE id_inciso = " . $_GET["id"];

            if ($connection -> query($sql) === TRUE) {
 ?>
                <script>
            alert ("Inciso excluída com sucesso");
            window.location = "listInciso.php";
                </script>

                <?php
            

            }
        else {
            echo $sql;
               ?>
            <script>
            alert("Erro ao excluir o Inciso");
            
            </script> 
            
<?php

    }
}

?>