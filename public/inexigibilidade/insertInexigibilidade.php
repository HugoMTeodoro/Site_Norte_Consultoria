<?php

include_once("../../data/connection.php");
include("../Login/valida.php");

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
$observacoes = $_POST["txtObservacoes"];
$analistaResponsavel = $_POST["txtAnalista"];
$orgao1 = $_POST["txtOrgao"];
$sessao=$_POST["dateSess"];
$dataabert=$_POST["dateabertura"];
$codigo = "inex" . $orgao1 . "_" . $numProcesso . "_" . $numInexigibilidade . "_" . $exercicio;
$tipo = "inexigibilidade";
$action = $_POST["action"];
$apostilamento=$_POST["txtApostilamento"];
$dt_pesquisa=$_POST["datePesquisa"];
$pesquisa ="Inexigibilidade"."/".$num_inexigibilidade."/"."$exercicio";
$porcentagem=$_POST["numPorcent"];



$sql = "select now()";
$resultado = $connection -> query($sql);
if ($resultado->num_rows > 0) {
    while ($exibir = $resultado->fetch_assoc()) {
        $dLancamento=$exibir["now()"];
    }
}


$sql = "INSERT INTO inexigibilidade  (exercicio ,  num_processo ,  num_inexigibilidade ,  objeto ,  categoria ,  dt_inicio ,  dt_ratificacao ,  portaria_nomeando ,  dt_solicitacao ,  dt_orcamento , dt_autorizacao,  dt_autuacao ,  especificacao ,  enquadramento ,  minuta ,  dt_aprovacao ,  dt_proposta ,  documentos ,  dt_ata ,  dt_parecer_juridico ,  dt_contrato_firmado ,  dt_publicacao ,  copia_notas , observacoes, dt_lancamento, orgao,codigo_processo, dt_sessao, dt_abertura,apostilamento,dt_pesquisa,pesquisa,porcentagem)
    VALUES('$exercicio','$numProcesso','$numInexigibilidade','$txtObjeto','$txtCategoria','$datei','$dateRatificacao','$txtp','$dates','$datepe','$datea','$dateau','$txtEspecificacao','$txtEnquadramento','$txtMinuta','$dateAprov','$dateProp','$txtHabilitacao','$dateAta','$dateParecer','$dateCF','$datePublicacao','$txtCopias', '$observacoes', '$dLancamento','$orgao1','$codigo','$sessao','$dataabert','$apostilamento','$dt_pesquisa','$pesquisa', '$porcentagem')";


$resultado = $connection -> query($sql);
?>
<form name="myform" action="<?php echo $action?>" method="POST">
        <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
        <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
        <input type="hidden" name="action" value="<?php echo $action ?>">
    </form>
    <?php
if ($resultado){ ?>
    <script>
        alert("Inexigibilidade cadastrada com sucesso");
        document.myform.submit();
    </script>
<?php
} else { 
    echo $sql;?>
    <script>
        alert("Erro-Processo existente ou falha no acesso ao banco");
        window.location = 'listInexigibilidade.php';
       
    </script>
    
<?php
}



?>