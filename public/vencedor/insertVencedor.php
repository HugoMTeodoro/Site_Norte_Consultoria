<?php

include_once("../../data/connection.php");

$empresa = $_POST["txtEmpresa"];
$valor = $_POST["txtValor"];
$id_dispensa1 = $_POST["txtID"];
$codigo_disp1 = $_POST["txtCodigo"];


$sql = "INSERT INTO 
    vencedor (nome_empresa, valor, id_processo, codigo_processo)
    VALUES('$empresa', '$valor', '$id_dispensa1', '$codigo_disp1')";


$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Vencedor cadastrado com sucesso");
        window.location = 'createVencedor.php';
    </script>
<?php
} else { ?>
    <script>
        alert("Ocorreu um erro ao cadastrar o vencedor");
        window.location = 'createVencedor.php';
       
    </script>
    
<?php
}

?>