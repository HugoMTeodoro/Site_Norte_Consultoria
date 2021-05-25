<?php

include_once("../../data/connection.php");
include("../Login/valida.php");
$registro = $_POST["txtRegistro"];

$sql = "INSERT INTO 
    registro (registro)
    VALUES('$registro')";


$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Registro cadastrado com sucesso");
        window.location = 'createRegistro.php';
    </script>
<?php
} else { ?>
    <script>
        alert("Ocorreu um erro ao cadastrar o registro");
       window.location = 'createRegistro.php';
    </script>
    
<?php
}

?>