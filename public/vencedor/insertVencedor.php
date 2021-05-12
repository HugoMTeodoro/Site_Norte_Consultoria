<?php

include_once("../../data/connection.php");

$empresa = $_POST["txtEmpresa"];
$valor = $_POST["txtValor"];
$id_proc = $_POST["txtID"];
$codigo_proc = $_POST["txtCodigo"];


$sql = "INSERT INTO 
    vencedor (nome_empresa, valor, id_processo, codigo_processo)
    VALUES('$empresa', '$valor', '$id_proc', '$codigo_proc')";


$resultado = $connection -> query($sql);

if ($resultado){
    
    
    ?>
    <form name="myform" action="../vencedor/createVencedor.php" method="POST">
        <input type="hidden" name="codigo" value="<?php echo $codigo_proc ?>">
    </form>

    <script type="text/javascript"> 
    alert("Vencedor Cadastrado com sucesso");    
            document.myform.submit();
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