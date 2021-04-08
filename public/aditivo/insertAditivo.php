<?php

include_once("../../data/connection.php");

$numAditivo = $_POST["numAditivo"];
$prazo_aditivo = $_POST["datePrazo"];
$data_aditivo = $_POST["dateAditivo"];
$valor_aditivo = $_POST["numValorAditivo"];


$sql = "INSERT INTO 
    aditivo (numero_aditivo, prazo_aditivo, data_aditivo, valor_aditivo)
    VALUES('$numAditivo', '$prazo_aditivo', '$data_aditivo', '$valor_aditivo')";


$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Aditivo cadastrado com sucesso");
    </script>
<?php
} else { ?>
    <script>
        alert("Ocorreu um erro ao cadastrar o aditivo");
       window.location = 'createAditivo.php';
    </script>
    
<?php
}

?>