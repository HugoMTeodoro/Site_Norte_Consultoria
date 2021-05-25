<?php

include_once("../../data/connection.php");
include("../Login/valida.php");
$tipo=$_POST["tipo"];
$empresa = $_POST["txtEmpresa"];
$valor = $_POST["txtValor"];
//$id_proc = $_POST["txtID"];
$codigo_proc = $_POST["txtCodigo"];
$action=$_POST["action"];

$sql = "select valor_total from $tipo where codigo_processo = '$codigo_proc'";
echo $sql;
$resultado = $connection -> query($sql);
if ($resultado->num_rows > 0) {
    while ($exibir = $resultado->fetch_assoc()) {
        $valor_total=$exibir["valor_total"];
    }
}


$valor_total=$valor_total + $valor;


$sql = "update $tipo set valor_total=$valor_total where codigo_processo='$codigo_proc'";


$resultado = $connection -> query($sql);



$sql = "INSERT INTO 
    vencedor (nome_empresa, valor, codigo_processo)
    VALUES('$empresa', '$valor', '$codigo_proc')";


$resultado = $connection -> query($sql);

if ($resultado){
     
    
    ?>
    <form name="myform" action="<?php echo $action ?>" method="POST">
        <input type="hidden" name="codigo" value="<?php echo $codigo_proc ?>">
        <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
        <input type="hidden" name="action" value="<?php echo $action ?>">
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
<script>

</script>