<?php

include_once("../../data/connection.php");
    
    
    $exercicio = $_POST["txtExercicio"];
    $num_processo = $_POST["numProcesso"];
    $modalidade = $_POST["modalidade"]; 
    $numero = $_POST["numero"];
    $objeto = $_POST["txtObjeto"];
    $registro = $_POST["registro"];
    $categoria = $_POST["categoria"];
    $dt_edital = $_POST["dateEdital"];
    $dt_entrega = $_POST["dateEntrega"];
    $dt_abertura = $_POST["dateAbertura"];
    $dt_portaria = $_POST["dateNomeacao"];
    $dt_solicitacao = $_POST["dates"];
    $dt_orcamento = $_POST["datepe"];
    $dt_autorizacao = $_POST["datea"];
    $dt_autuacao = $_POST["dateau"];
    $enquadramento = $_POST["txtEnquadramento"];
    $dt_anexos = $_POST["dateEditalEAnexos"];
    $minuta = $_POST["txtMinuta"];
    $dt_aprovacao = $_POST["dateAprovMin"];
    $dt_publicacao = $_POST["datePubEd"];
    $especificacao = $_POST["txtEspecificacao"];
    $dt_recibo = $_POST["dateRecibo"];
    $documentos = $_POST["txtHabilitacao"];
    $dt_ata = $_POST["dateAtaAbertura"];
    $dt_confirmacao = $_POST["dateAutenticidade"];
    $prazo = $_POST["datePrazoProposta"];
    $date_ata_julgamento= $_POST["dateAtaJulgamento"];
    $classificados = $_POST["txtClassificados"];
    $dt_pub_resultado = $_POST["dateResultadoJulgamento"];
    $prazo2 = $_POST["datePrazoHabilitacao"];
    $dt_parecer_juridico = $_POST["dateParecer"];
    $dt_adjudicacao = $_POST["dateAdjudicacao"];
    $dt_homologacao = $_POST["dateHomologacao"];
    $dt_contrato_firmado = $_POST["dateCF"];
    $dt_publicacao_contrato = $_POST["datePublicacao"];
    $txtCopias = $_POST["txtCopias"];
    $observacoes = $_POST["txtObservacoes"];
    $analistaResponsavel = $_POST["txtAnalista"];
    $dLancamento = $_POST["dateLancamento"];
    $orgao1 = $_POST["txtOrgao"];
    $codigo = "mod" . $orgao1 . "_" . $num_processo . "_" . $numero . "_" . $exercicio;
    $tipo = "modalidade";
    $action = $_POST["action"];
    $emissao=$_POST["dateemi"];
    $sessao=$_POST["datesess"];
    $apostilamento=$_POST["txtApostilamento"];
    $dt_pesquisa=$_POST["datePesquisa"];
    $pesquisa ="Modalidade"."/".$num_processo."/"."$exercicio";

    $sql = "INSERT INTO modalidade (exercicio, num_processo, modalidade, numero, objeto, registro, categoria, dt_edital, dt_entrega, dt_abertura, dt_portaria, dt_solicitacao, dt_orcamento, dt_autorizacao, dt_autuacao, enquadramento, dt_anexos, dt_aprovacao, minuta, dt_publicacao, especificacao, dt_recibo, documentos, dt_ata, dt_confirmacao, prazo, dt_ata_julgamento, classificados, dt_pub_res, prazo2, dt_parecer_juridico, dt_adjudicacao, dt_homologacao, dt_contrato_firmado, dt_publicacao_contrato, copia, observacoes, dt_lancamento, orgao, codigo_processo, dt_emissao, dt_sessao,apostilamento,dt_pesquisa,pesquisa)
    VALUES('$exercicio','$num_processo','$modalidade','$numero','$objeto','$registro','$categoria','$dt_edital','$dt_entrega','$dt_abertura','$dt_portaria','$dt_solicitacao','$dt_orcamento','$dt_autorizacao','$dt_autuacao','$enquadramento','$dt_anexos','$dt_aprovacao','$minuta','$dt_publicacao','$especificacao','$dt_recibo','$documentos','$dt_ata','$dt_confirmacao','$prazo','$date_ata_julgamento','$classificados','$dt_pub_resultado', '$prazo2','$dt_parecer_juridico','$dt_adjudicacao','$dt_homologacao','$dt_contrato_firmado','$dt_publicacao_contrato','$txtCopias', '$observacoes', '$dLancamento','$orgao1','$codigo','$emissao','$sessao','$apostilamento','$dt_pesquisa',$pesquisa)";


$resultado = $connection -> query($sql);

if ($resultado){ 
    ?>
    <script>
        alert("Modalidade cadastrada com sucesso");
        window.location = 'listModalidade.php';
    </script>
<?php
} else { 
    echo $sql;?>
    <script>
        alert("Ocorreu um erro ao cadastrar a modalidade");
       
       
    </script>
    
<?php
}



?>