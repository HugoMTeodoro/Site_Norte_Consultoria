
<?php 
        include_once("../../data/connection.php");
        if (isset ($_GET["id"])) {
            $sql = "DELETE FROM categoria WHERE id_categoria = " . $_GET["id"];

            if ($connection -> query($sql) === TRUE) {
 ?>
                <script>
            alert ("Categoria excluída com sucesso");
            window.location = "listCategoria.php";
                </script>

                <?php
            

            }
        else {
            echo $sql;
               ?>
            <script>
            alert("Erro ao excluir a categoria");
            
            </script> 
            
<?php

    }
}

?>