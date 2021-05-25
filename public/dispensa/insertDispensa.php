<?php
include_once("../../data/connection.php");
include("../Login/valida.php");
$exercicio = $_POST["txtExercicio"];
$nProcesso = $_POST["numProcesso"];
$nDispensa = $_POST["numDispensa"];
$inciso = $_POST["inciso"];
$objeto = $_POST["txtObjeto"];
$categoria = $_POST["txtCategoria"];
$dInicio = $_POST["datei"];
$dRatificacao = $_POST["dater"];
$dPortariaComissao = $_POST["datep"];
$dSolicitacaoCompras = $_POST["dates"];
$dOrcamento = $_POST["datepe"];
$dAutorizacao = $_POST["datea"];
$dAutuacao = $_POST["dateau"];
$especificacao = $_POST["txtEspecificacao"];
$enquadramento = $_POST["txtEnquadramento"];
$minuta = $_POST["txtMinuta"];
$dPropostaFavorecido = $_POST["dateProp"];
$habilitacao = $_POST["txtHabilitacao"];
$dAtaDispensa = $_POST["dateAta"];
$dParecerJuridico = $_POST["dateParecer"];
$dContratoFormado = $_POST["dateCF"];
$dPublicacaoDispensa = $_POST["datePublicacao"];
$copiaNotas = $_POST["txtCopias"];
$observacoes = $_POST["txtObservacoes"];
$analistaResponsavel = $_POST["txtAnalista"];
$dLancamento = $_POST["dateLancamento"];
$orgao1 = $_POST["txtOrgao"];
$tipo="dispensa";
$codigo = "disp" . $orgao1 . "_" . $nProcesso . "_" . $nDispensa . "_" . $exercicio;
$action = $_POST["action"];
$pesquisa ="Dispensa"."/".$nDispensa."/"."$exercicio";
$dataabert=$_POST["dateabertura"];
$dtsessao=$_POST["datesessao"];
$apostilamento=$_POST["txtApostilamento"];
$dt_pesquisa=$_POST["datePesquisa"];
$emergencia=$_POST["tipoEmergencia"];
$judicial=$_POST["tipoJudicial"];
$porcentagem=$_POST["numPorcent"];


$sql = "INSERT INTO 
    dispensa (exercicio, num_processo, num_dispensa, inciso, objeto, categoria, data_inicio, data_ratificacao, data_portaria_comissao, data_solicitacao_compras_servicos, data_preco_estimativo, data_autorizacao_abertura, data_autuacao, especificacao_objeto, enquadramento, minuta_contrato, data_proposta_favorecido, documento_habilitacao, data_ata, data_parecer_juridico, data_contrato_firmado, data_publicacao, copia_empenho_compras_legais, observacoes, data_lancamento, orgao,codigo_processo,pesquisa,dt_abertura,dt_sessao,apostilamento,dt_pesquisa, emergencia, judicial,porcentagem)
    VALUES('$exercicio', '$nProcesso', '$nDispensa', '$inciso', '$objeto', '$categoria', '$dInicio', '$dRatificacao' ,'$dPortariaComissao' ,'$dSolicitacaoCompras', '$dOrcamento' ,'$dAutorizacao','$dAutuacao','$especificacao', '$enquadramento', '$minuta', '$dPropostaFavorecido', '$habilitacao', '$dAtaDispensa', '$dParecerJuridico', '$dContratoFormado', '$dPublicacaoDispensa', '$copiaNotas', '$observacoes', '$dLancamento','$orgao1','$codigo','$pesquisa','$dataabert','$dtsessao','$apostilamento','$dt_pesquisa','$emergencia','$judicial','$porcentagem')";


$resultado = $connection->query($sql);
?>
<form name="myform" action="<?php echo $action?>" method="POST">
        <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
        <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
        <input type="hidden" name="action" value="<?php echo $action ?>">
    </form>
<?php

if ($resultado) {

?>
    
    <script type="text/javascript"> 
    alert("Dispensa Cadastrada com sucesso");    
            document.myform.submit();
    </script>
    
<?php
} else {
    echo $sql; ?>

    <script>
        alert("Dispensa já existente");
        //window.location = 'listDispensa.php';
    </script>

<?php
}

?>