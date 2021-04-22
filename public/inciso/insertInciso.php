<?php

include_once("../../data/connection.php");

$inciso = $_POST["txtInciso"];

$sql = "INSERT INTO 
    inciso (inciso)
    VALUES('$inciso')";


$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Inciso cadastrado com sucesso");
        window.location = 'createInciso.php';
    </script>
<?php
} else { ?>
    <script>
        alert("Ocorreu um erro ao cadastrar o inciso");
       window.location = 'createInciso.php';
    </script>
    
<?php
}

?>