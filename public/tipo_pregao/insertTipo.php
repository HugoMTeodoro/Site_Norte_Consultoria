<?php

include_once("../../data/connection.php");
include("../Login/valida.php");
$pregao = $_POST["txtPregao"];

$sql = "INSERT INTO 
    tipo_pregao (pregao)
    VALUES('$pregao')";


$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Tipo pregão cadastrado com sucesso");
        window.location = 'createPregao.php';
    </script>
<?php
} else { ?>
    <script>
        alert("Ocorreu um erro ao cadastrar o tipo do pregão");
       window.location = 'createPregao.php';
    </script>
    
<?php
}

?>