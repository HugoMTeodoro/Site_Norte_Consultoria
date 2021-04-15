<?php

include_once("../../data/connection.php");

$exercicio = $_POST[""];
$nProcesso = $_POST[""];
$nModalidade = $_POST[""];
$inciso = $_POST[""];
$objeto = $_POST[""];
$categoria = $_POST[""];
$dInicio = $_POST[""];
$dRatificacao = $_POST[""];
$dPortariaComissao = $_POST[""];
$dSolicitacaoCompras = $_POST[""];
$dOrcamento = $_POST[""];
$dAutorizacao = $_POST[""];
$dAutuacao = $_POST[""];
$especificacao = $_POST[""];
$enquadramento = $_POST[""];
$minuta = $_POST[""];
$dPropostaFavorecido = $_POST[""];
$habilitacao = $_POST[""];
$dAtaDispensa = $_POST[""];
$dParecerJuridico = $_POST[""];
$dContratoFormado = $_POST[""];
$dPublicacaoDispensa = $_POST[""];
$copiaNotas = $_POST[""];
$valorTotal = $_POST[""];
$observacoes = $_POST[""];
$analistaResponsavel = $_POST[""];
$dLancamento = $_POST[""];





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