<?php

include_once("../../data/connection.php");

$categoria = $_POST["txtCategoria"];

$sql = "INSERT INTO 
    categoria (categoria)
    VALUES('$categoria')";


$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Categoria cadastrado com sucesso");
        window.location = 'createCategoria.php';
    </script>
<?php
} else { ?>
    <script>
        alert("Ocorreu um erro ao cadastrar a categoria");
       window.location = 'createCategoria.php';
    </script>
    
<?php
}

?>