    <?php

    include_once("../../data/connection.php");

    
    $exercicio  = $_POST["txtExercicio"];
    $num_processo  = $_POST["numProcesso"];
    $tipo  = $_POST["txtPregao"];
    $numero  = $_POST["num"];
    $objeto  = $_POST["txtObjeto"];
    $registro  = $_POST["registro"];
    $categoria  = $_POST["txtCategoria"];
    $dt_edital  = $_POST["dateEdital"];
    $dt_abertura  = $_POST["dateAbertura"];
    $dt_nomeacao  = $_POST["dateNomeacao"];
    $dt_solicitacao  = $_POST["dates"];
    $dt_orcamento  = $_POST["datepe"];
    $dt_autorizacao  = $_POST["datea"];
    $dt_autuacao  = $_POST["dateau"];
    $enquadramento  = $_POST["txtEnquadramento"];
    $edital  = $_POST["txtEdital"];
    $dt_aprovacao  = $_POST["dateAprov"];
    $minuta  = $_POST["txtMinuta"];
    $dt_publicacao  = $_POST["datePub"];
    $especificacao  = $_POST["txtEspecificacao"];
    $dt_credenciamento  = $_POST["dateCred"];
    $proposta_precos  = $_POST["numPreco"];
    $dt_ata_abertura  = $_POST["dateAbertura"];
    $documento  = $_POST["documentos"];
    $dt_confirmacao  = $_POST["dateConfirmacao"];
    $prazo  = $_POST["datePrazoRec"];
    $dt_adjudicacao  = $_POST["dateAdjudicacao"];
    $dt_parecer  = $_POST["dateParecer"];
    $dt_homologacao  = $_POST["dateHomologacao"];
    $dt_contrato_firmado  = $_POST["dateContratoFirmado"];
    $dt_publicacao_ata  = $_POST["datePublicacaoAta"];
    $txtCopias = $_POST["txtCopias"];
    $observacoes = $_POST["txtObservacoes"];
    $analistaResponsavel = $_POST["txtAnalista"];
    $dLancamento = $_POST["dateLancamento"];
    $orgao1 = $_POST["txtOrgao"];
    $codigo = "pr" . $orgao1 . "_" . $num_processo . "_" . $numero . "_" . $exercicio;
    $tipo = "pregao";
    $action = $_POST["action"];
    $sessao=$_POST["datesessao"];


    $sql = "INSERT INTO 
    pregao (exercicio, num_processo, tipo, numero, objeto, registro, categoria, dt_edital, dt_abertura, dt_nomeacao, dt_solicitacao, dt_orcamento, dt_autorizacao, dt_autuacao, enquadramento, edital, dt_aprovacao, minuta, dt_publicacao, especificacao, dt_credenciamento, proposta_precos, dt_ata_abertura, documento, dt_confirmacao, prazo, dt_adjudicacao, dt_parecer, dt_homologacao, dt_contrato_firmado, dt_publicacao_ata, copia_notas, observacoes, dt_lancamento, orgao, codigo_processo, dt_sessao)
    values ('$exercicio', '$num_processo', '$tipo', '$numero', '$objeto', '$registro', '$categoria', '$dt_edital', '$dt_abertura', '$dt_nomeacao', '$dt_solicitacao', '$dt_orcamento', '$dt_autorizacao', '$dt_autuacao', '$enquadramento', '$edital', '$dt_aprovacao', '$minuta', '$dt_publicacao', '$especificacao', '$dt_credenciamento', '$proposta_precos', '$dt_ata_abertura', '$documento', '$dt_confirmacao', '$prazo', '$dt_adjudicacao', '$dt_parecer', '$dt_homologacao', '$dt_contrato_firmado', '$dt_publicacao_ata', '$txtCopias', '$observacoes', '$dLancamento','$orgao1','$codigo',$sessao)";



    $resultado = $connection -> query($sql);

    if ($resultado){
         ?>
        <script>
            alert("Pregão cadastrada com sucesso");
            window.location = 'listPregao.php';
        </script>
    <?php
    } else {
        echo $sql; ?>
        <script>
            alert("Ocorreu um erro ao cadastrar a pregão");
            //window.location = 'listPregao.php';
        
        </script>
        
    <?php
    }

    ?>
