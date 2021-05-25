<?php

include_once("../../data/connection.php");
include("../Login/valida.php");

$modalidade = $_POST["txtModalidade"];

$sql = "INSERT INTO 
    tipo_modalidade (modalidade)
    VALUES('$modalidade')";


$resultado = $connection -> query($sql);

if ($resultado){
    echo $sql; ?>
    <script>
        alert("Modalidade cadastrada com sucesso");
        window.location = 'listTipoModalidade.php';
        
    </script>
<?php
} else { ?>
    <script>
        alert("Ocorreu um erro ao cadastrar o inciso");
       window.location = 'createModalidade.php';
    </script>
    
<?php
}

?>