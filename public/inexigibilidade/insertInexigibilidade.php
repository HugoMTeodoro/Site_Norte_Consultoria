<?php

include_once("../../data/connection.php");

$exercicio = $_POST["txtExercicio"];
$numProcesso = $_POST["numProcesso"];
$numInexigibilidade = $_POST["numInexigibilidade"];
$txtObjeto = $_POST["txtObjeto"];
$txtCategoria = $_POST["txtCategoria"];
$datei = $_POST["datei"];
$txtp = $_POST["txtp"];
$dates = $_POST["dates"];
$datepe = $_POST["datepe"];
$datea = $_POST["datea"];
$dateau = $_POST["dateau"];
$txtEspecificacao = $_POST["txtEspecificacao"];
$txtEnquadramento = $_POST["txtEnquadramento"];
$txtMinuta = $_POST["txtMinuta"];
$dateAprov = $_POST["dateAprov"];
$dateProp = $_POST["dateProp"];
$txtHabilitacao = $_POST["txtHabilitacao"];
$dateAta = $_POST["dateAta"];
$dateParecer = $_POST["dateParecer"];
$dateRatificacao = $_POST["dateRatificacao"];
$dateCF = $_POST["dateCF"];
$datePublicacao = $_POST["datePublicacao"];
$txtCopias = $_POST["txtCopias"];
$txtCodReg = $_POST["txtCodReg"];
$numTotal = $_POST["numTotal"];
$txtObservacoes = $_POST["txtObservacoes"];
$dateLancamento = $_POST["dateLancamento"];

$sql = "INSERT INTO inexigibilidade  (exercicio ,  num_processo ,  num_inexigibilidade ,  objeto ,  categoria ,  dt_inicio ,  dt_ratificacao ,  portaria_nomeando ,  dt_solicitacao ,  dt_orcamento , dt_autorizacao,  dt_autuacao ,  especificacao ,  enquadramento ,  minuta ,  dt_aprovacao ,  dt_proposta ,  documentos ,  dt_ata ,  dt_parecer_juridico ,  dt_contrato_firmado ,  dt_publicacao ,  copia_notas ,  codigo ,  valor_total ,  observacoes ,  dt_lancamento )
    VALUES('$exercicio','$numProcesso','$numInexigibilidade','$txtObjeto','$txtCategoria','$datei','$dateRatificacao','$txtp','$dates','$datepe','$datea','$dateau','$txtEspecificacao','$txtEnquadramento','$txtMinuta','$dateAprov','$dateProp','$txtHabilitacao','$dateAta','$dateParecer','$dateCF','$datePublicacao','$txtCopias','$txtCodReg','$numTotal',
'$txtObservacoes','$dateLancamento')";


$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Inexigibilidade cadastrada com sucesso");
        window.location = 'createInexigibilidade.php';
    </script>
<?php
} else { 
    echo $sql;?>
    <script>
        alert("Ocorreu um erro ao cadastrar a inexigibilidade");
       
       
    </script>
    
<?php
}



?>