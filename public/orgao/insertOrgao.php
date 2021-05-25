<?php

include_once("../../data/connection.php");
include("../Login/valida.php");

$nome = $_POST["txtNome"];

$sql = "INSERT INTO 
    orgao (nome_orgao)
    VALUES('$nome')";


$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Órgão cadastrado com sucesso");
        window.location = 'listOrgao.php';
    </script>
<?php
} else { ?>
    <script>
        alert("Ocorreu um erro ao cadastrar o órgão");
       window.location = 'createOrgao.php';
    </script>
    
<?php
}

?>