<?php

include_once("../../data/connection.php");
include("../Login/valida.php");
include("../Template/header.php");


$numAditivo = $_POST["numAditivo"];
$prazo_aditivo = $_POST["datePrazo"];
$data_aditivo = $_POST["dateAditivo"];
$valor_aditivo = $_POST["numValorAditivo"];
$tipo_aditivo = $_POST["tipoAditivo"];
$empresa = $_POST["Empresa"];
$id_proc = $_POST["txtID"];
$codigo_proc = $_POST["txtCodigo"];
$tipo = $_POST["tipo"];
$action = $_POST["action"];
$categoria = $_POST["categoria"];
$exercicio = $_POST["exercicio"];

$sql = "select valor_aditivo,valor_total from $tipo where codigo_processo = '$codigo_proc'";
$resultado = $connection -> query($sql);
if ($resultado->num_rows > 0) {
    while ($exibir = $resultado->fetch_assoc()) {
        $val=$exibir["valor_aditivo"];
    }
}

$val=$valor_aditivo+$val;


$sql = "update $tipo set valor_aditivo=$val where codigo_processo='$codigo_proc'";


$resultado = $connection -> query($sql);





$sql = "INSERT INTO 
    aditivo (numero_aditivo, prazo_aditivo, data_aditivo, valor_aditivo, tipo_aditivo, nome_empresa, codigo_processo, id_processo,categoria,orgao,exercicio)
    VALUES('$numAditivo', '$prazo_aditivo', '$data_aditivo', '$valor_aditivo','$tipo_aditivo','$empresa','$codigo_proc','$id_proc','$categoria','$orgaoa','$exercicio')";


$resultado = $connection->query($sql);

if ($resultado) { ?>
<form name="myform" action="<?php echo $action."#aditivo" ?>" method="POST">
        <input type="hidden" name="codigo" value="<?php echo $codigo_proc ?>">
        <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
        <input type="hidden" name="action" value="<?php echo $action ?>">
    </form>

    <script type="text/javascript">
        alert("Aditivo Cadastrado com sucesso");
        document.myform.submit();
    </script>
<?php
} else { ?>
    <script>
        alert("Ocorreu um erro ao cadastrar o aditivo");
        window.location = '../vencedor/createVencedor.php';
    </script>

<?php
}

?>