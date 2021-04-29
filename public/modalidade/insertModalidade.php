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
    $dt_aprovacao = $_POST["dateAprovMin"];
    $minuta = $_POST["txtMinuta"];
    $dt_publicacao = $_POST["datePubEd"];
    $especificacao = $_POST["txtEspecificacaoObjeto"];
    $dt_recibo = $_POST["dateRecibo"];
    $documentos = $_POST["txtHabilitacao"];
    $dt_ata = $_POST["dateAtaAbertura"];
    $dt_confirmacao = $_POST["dateAutenticidade"];
    $prazo = $_POST["datePrazoRecursal"];
    $date_ata_julgamento= $_POST["dateAtaJulgamento"];
    $classificados = $_POST["txtClassificados"];
    $dt_pub_resultado = $_POST["dateResultadoJulgamento"];
    $dt_parecer_juridico = $_POST["dateParecer"];
    $dt_adjudicacao = $_POST["dateAdjudicacao"];
    $dt_homologacao = $_POST["dateHomologacao"];
    $dt_contrato_firmado = $_POST["dateCF"];
    $dt_publicacao_contrato = $_POST["datePublicacao"];
    $copia = $_POST["txtCopias"];
    $codigo = $_POST["txtCodReg"];
    $valor_total = $_POST["numTotal"];
    $observacoes = $_POST["txtObservacoes"];
    $dt_lancamento = $_POST["dateLancamento"];

    $sql = "INSERT INTO modalidade (exercicio, num_processo, modalidade, numero, objeto, registro, categoria, dt_edital, dt_entrega, dt_abertura, dt_portaria, dt_solicitacao, dt_orcamento, dt_autorizacao, dt_autuacao, enquadramento, dt_anexos, dt_aprovacao, minuta, dt_publicacao, especificacao, dt_recibo, documentos, dt_ata, dt_confirmacao, prazo, dt_ata_julgamento, classificados, dt_pub_resultado, dt_parecer_juridico, dt_adjudicacao, dt_homologacao, dt_contrato_firmado, dt_publicacao_contrato, copia, codigo, valor_total, observacoes, dt_lancamento)
    VALUES('$exercicio','$num_processo','$modalidade','$numero','$objeto','$registro','$categoria','$dt_edital','$dt_entrega','$dt_abertura','$dt_portaria','$dt_solicitacao','$dt_orcamento','$dt_autorizacao','$dt_autuacao','$enquadramento','$dt_anexos','$dt_aprovacao','$minuta','$dt_publicacao','$especificacao','$dt_recibo','$documentos','$dt_ata','$dt_confirmacao','$prazo','$date_ata_julgamento','$classificados','$dt_pub_resultado','$dt_parecer_juridico','$dt_adjudicacao','$dt_homologacao','$dt_contrato_firmado','$dt_publicacao_contrato','$copia','$codigo','$valor_total','$observacoes','$dt_lancamento')";


$resultado = $connection -> query($sql);

if ($resultado){ 
    ?>
    <script>
        alert("Modalidade cadastrada com sucesso");
        window.location = 'createModalidade.php';
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