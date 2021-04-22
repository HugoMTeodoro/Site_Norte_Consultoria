
<?php 
        include_once("../../data/connection.php");
        if (isset($_POST)) {

            $id = $_POST["incisoId"];
            $Inciso = $_POST["txtInciso"];

            $sql = "UPDATE inciso 
            SET inciso = '" . $Inciso . "' " .  
            "WHERE id_inciso = " . $id;

            $resultado = $connection -> query($sql);

            if ($resultado) {
 ?>
                <script>
                    alert ("Inciso editado com sucesso");
                   
                </script>

                <?php
            
            }
            else {
                echo $sql;
               ?>
            <script>
                alert("Erro ao editar o registro");
                
            </script> 
<?php

    }
}

?>