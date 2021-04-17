<?php 
        include_once("../../data/connection.php");
        if (isset ($_GET["id"])) {
            $sql = "DELETE FROM dispensa WHERE id_dispensa = " . $_GET["id"];

            if ($connection -> query($sql) === TRUE) {
 ?>
                <script>
            alert ("Dispensa excluída com sucesso");
            window.location = "listDispensa.php";
                </script>

                <?php
            

            }
        else {
               ?>
            <script>
            alert("Erro ao excluir a dispensa");
            window.location = "listDispensa.php";
            </script> 
<?php

    }
}

?>