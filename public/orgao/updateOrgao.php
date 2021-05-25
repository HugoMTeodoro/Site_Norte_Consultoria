
<?php 
include("../Login/valida.php");
        include_once("../../data/connection.php");
        if (isset($_POST)) {

            $id = $_POST["orgaoId"];
            $nome = $_POST["txtNome"];

            $sql = "UPDATE orgao 
            SET nome_orgao = '" . $nome . "' " .  
            "WHERE id_orgao = " . $id;

            $resultado = $connection -> query($sql);

            if ($resultado) {
 ?>
                <script>
                    alert ("Órgão editado com sucesso");
                    window.location = "listOrgao.php";
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